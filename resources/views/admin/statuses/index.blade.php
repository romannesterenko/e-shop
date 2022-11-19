@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h3 class="m-b-10">Список статусов</h3>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="#!">Список статусов</a></li>
    </ul>
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                <h5>Список статусов заказа</h5>
                <a href="{{route('admin.statuses.create')}}" type="submit" class="btn btn-rounded btn-outline-success" value="Создать">Создать статус</a>
                </div>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Наименование</th>
                                <th>Код статуса</th>
                                <th>Цвет статуса</th>
                                <th class="d-flex justify-content-center">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($statuses as $status)
                                <tr>
                                    <td scope="row">{{$status->id}}</td>
                                    <td scope="row">{{ $status->name }}</td>
                                    <td scope="row">{{ $status->code }}</td>
                                    <td scope="row"><div style="background-color: {{ $status->color }}; width: 40px; height: 30px; border: 1px solid;"></div></td>
                                    <td class="d-flex justify-content-end">
                                        <a href="{{route('admin.statuses.edit', ['id' => $status->id])}}" role="button"  type="button" class="btn btn-rounded btn-outline-primary">
                                            <i class="feather icon-edit-1"></i>
                                        </a>
                                        <form action="{{route('admin.statuses.delete', $status->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-rounded btn-outline-danger" value="Удалить">
                                                <i class="feather icon-trash-2"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
