@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h3 class="m-b-10">Список заказов</h3>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="#!">Список заказов</a></li>
    </ul>
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Дата</th>
                                <th>Покупатель</th>
                                <th>Сума заказа</th>
                                <th>Статус заказа</th>
                                <th class="d-flex justify-content-center">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td scope="row"><a href="{{route('admin.orders.show', ['id' => $order->id])}}">{{$order->id}}</a></td>
                                    <td scope="row">{{ $order->created_at }}</td>
                                    <td scope="row">{{ $order->first_name }} {{ $order->last_name }}</td>
                                    <td scope="row">{{ $order->price }}</td>
                                    <td scope="row"><div class="border border-secondary rounded-pill text-center py-1 font-weight-bold" style="background-color: {{ $order->statuses()->color }}">{{ $order->statuses()->name }}</div></td>
                                    <td class="d-flex justify-content-end">
                                        <a href="{{route('admin.orders.show', ['id' => $order->id])}}" role="button" type="button" class="btn btn-rounded btn-outline-success">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{route('admin.orders.edit', ['id' => $order->id])}}" role="button"  type="button" class="btn btn-rounded btn-outline-primary">
                                            <i class="feather icon-edit-1"></i>
                                        </a>
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
