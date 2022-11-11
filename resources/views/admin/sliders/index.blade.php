@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h5 class="m-b-10">Список слайдеров</h5>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="#!">Список слайдеров</a></li>
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
                                <th>Название категории</th>
                                <th>Slug</th>
                                <th>Активность</th>
                                <th>Популярная</th>
                                <th>Изображение</th>
                                <th class="d-flex justify-content-end">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <th scope="row"><a href="{{route('admin.sliders.show', ['id' => $slider->id])}}">{{$slider->id}}</a></th>
                                    <td><a href="{{route('admin.sliders.show', ['id' => $slider->id])}}">{{$slider->name}}</a></td>
                                    <td>{{$slider->slug}}</td>
                                    <td>{{$slider->status==1?'Да':'Нет'}}</td>
                                    <td>{{$slider->popular==1?'Да':'Нет'}}</td>
                                    <td><img class="list-sliders-image" src="{{asset('assets/uploads/slider/'.$slider->image)}}" alt=""></td>
                                    <td class="d-flex justify-content-end">
                                        <a href="{{route('admin.sliders.show', ['id' => $slider->id])}}" role="button" type="button" class="btn btn-rounded btn-outline-success">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{route('admin.sliders.edit', ['id' => $slider->id])}}" role="button"  type="button" class="btn btn-rounded btn-outline-primary">
                                            <i class="feather icon-edit-1"></i>
                                        </a>
                                        <form action="{{route('admin.sliders.delete', $slider->id)}}" method="post">
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
