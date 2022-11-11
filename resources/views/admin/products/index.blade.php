@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h3 class="m-b-10">Список продуктов</h3>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="#!">Список продуктов</a></li>
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
                                <th>Категория</th>
                                <th>Название</th>
                                <th>Стоимость, грн</th>
                                <th>Активность</th>
                                <th>В тренде</th>
                                <th>Изображение</th>
                                <th class="d-flex justify-content-center">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row"><a href="{{route('admin.products.show', ['id' => $product->id])}}">{{$product->id}}</a></th>
                                    <td><a href="{{route('admin.categories.show', ['id' => $product->category->id])}}">{{$product->category->name}}</a></td>
                                    <td><a href="{{route('admin.products.show', ['id' => $product->id])}}">{{$product->name}}</a></td>
                                    <td>{{$product->original_price}}</td>
                                    <td>{{$product->status==1?'Да':'Нет'}}</td>
                                    <td>{{$product->popular==1?'Да':'Нет'}}</td>
                                    <td><img class="list-categories-image" src="{{asset('assets/uploads/product/'.$product->image)}}" alt=""></td>
                                    <td class="d-flex justify-content-end">
                                        <a href="{{route('admin.products.show', ['id' => $product->id])}}" role="button" type="button" class="btn btn-rounded btn-outline-success">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{route('admin.products.edit', ['id' => $product->id])}}" role="button"  type="button" class="btn btn-rounded btn-outline-primary">
                                            <i class="feather icon-edit-1"></i>
                                        </a>
                                        <form action="{{route('admin.products.delete', $product->id)}}" method="post">
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
