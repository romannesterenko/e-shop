@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h5 class="m-b-10">Просмотр категории "{{$product->name}}"</h5>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">Список категорий</a></li>
        <li class="breadcrumb-item"><a href="#!">Панель управления</a></li>
    </ul>
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Просмотр категории</h5>
            </div>
            <div class="card-body">
                <div class="col">
                    <form role="form" action="{{route('admin.categories.store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Название категории</label>
                                <input type="text" name="name" value="{{$product->name}}" class="form-control" id="inputEmail4" placeholder="" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Символьный код категории</label>
                                <input type="text" class="form-control" value="{{$product->slug}}" name="slug"  id="inputPassword4" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Описание категории</label>
                            <textarea name="description" class="form-control" rows="5" disabled>{{$product->description}}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="status" type="checkbox" id="status" checked>
                                    <label class="form-check-label" for="status">Категория активна</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="popular" type="checkbox" id="popular">
                                    <label class="form-check-label" for="popular">Популярная категория</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Title</label>
                                <input type="text" value="{{$product->meta_title}}" name="meta_title" class="form-control" id="inputEmail4" placeholder="" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Description</label>
                                <input type="text" value="{{$product->meta_descrip}}" class="form-control" name="meta_descrip"  id="inputPassword4" placeholder="" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Keywords</label>
                                <input type="text" class="form-control" value="{{$product->meta_keywords}}" name="meta_keywords"  id="inputPassword4" placeholder="" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
