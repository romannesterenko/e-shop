@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h5 class="m-b-10">Список категорий</h5>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Административная панель</a></li>
        <li class="breadcrumb-item"><a href="#!">Список категорий</a></li>
    </ul>
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h5>Список категорий продуктов</h5>
                    <a href="{{route('admin.categories.create')}}" type="submit" class="btn btn-rounded btn-outline-success" value="Создать">Создать категорию</a>
                </div>
            </div>
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
                                <th>Создал</th>
                                <th>Изображение</th>
                                <th class="d-flex justify-content-end">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row"><a href="{{route('admin.categories.show', ['id' => $category->id])}}">{{$category->id}}</a></th>
                                    <td><a href="{{route('admin.categories.show', ['id' => $category->id])}}">{{$category->name}}</a></td>
                                    <td>{{$category->slug}}</td>
                                    <td>{{$category->status==1?'Да':'Нет'}}</td>
                                    <td>{{$category->popular==1?'Да':'Нет'}}</td>
                                    <td>{{$category->author()->name}} {{$category->author()->last_name}}</td>
                                    <td><img class="list-categories-image" src="{{asset('assets/uploads/category/'.$category->image)}}" alt=""></td>
                                    <td class="d-flex justify-content-end">
                                        <a href="{{route('admin.categories.show', ['id' => $category->id])}}" role="button" type="button" class="btn btn-rounded btn-outline-success">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{route('admin.categories.edit', ['id' => $category->id])}}" role="button"  type="button" class="btn btn-rounded btn-outline-primary">
                                            <i class="feather icon-edit-1"></i>
                                        </a>
                                        <form action="{{route('admin.categories.delete', $category->id)}}" method="post">
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
