@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h5 class="m-b-10">Редактирование заказа</h5>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.orders.index')}}">Список заказов</a></li>
        <li class="breadcrumb-item"><a href="#!">Редактирование заказа</a></li>
    </ul>
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <form role="form" action="{{route('admin.orders.update', ['id' => $order->id])}}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="category">Категория</label>
                                <select class="form-control" name="category_id" id="category">
                                    <option value="0">Нет категории</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{ $order->category->id==$category->id?'selected':''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Название заказа</label>
                                <input type="text" name="name" value="{{$order->name}}" class="form-control" id="inputEmail4" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Символьный код заказа</label>
                                <input type="text" class="form-control" value="{{$order->slug}}" name="slug"  id="inputPassword4" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Анонсное описание заказа</label>
                            <textarea name="small_description" class="form-control" rows="5">{{$order->small_description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Детальное описание заказа</label>
                            <textarea name="description" id="classic-editor">{{$order->description}}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Цена</label>
                                <input type="text" class="form-control" value="{{$order->original_price}}" name="original_price"  id="inputPassword4" placeholder="" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Цена со скидкой</label>
                                <input type="text" class="form-control" value="{{$order->selling_price}}" name="selling_price"  id="inputPassword4" placeholder="" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Количество</label>
                                <input type="text" class="form-control" value="{{$order->qty}}" name="qty"  id="inputPassword4" placeholder="" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Стоимость доставки</label>
                                <input type="text" class="form-control" value="{{$order->tax}}" name="tax"  id="inputPassword4" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="status" type="checkbox" id="status" checked>
                                    <label class="form-check-label" for="status">Заказ активен</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="trending" type="checkbox" id="trending">
                                    <label class="form-check-label" for="trending">В тренде</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Title</label>
                                <input type="text" value="{{$order->meta_title}}" name="meta_title" class="form-control" id="inputEmail4" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Description</label>
                                <input type="text" value="{{$order->meta_descrip}}" class="form-control" name="meta_descrip"  id="inputPassword4" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Keywords</label>
                                <input type="text" class="form-control" value="{{$order->meta_keywords}}" name="meta_keywords"  id="inputPassword4" placeholder="" required>
                            </div>
                        </div>
                        @if($order->image)
                            <div class="form-row py-5">
                                <img src="{{asset('assets/uploads/order/'.$order->image)}}" style="width: 150px" alt="">
                            </div>
                        @endif
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label" for="validatedCustomFile">Выберите изображение...</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional_scripts')
    <!-- Ckeditor js -->
    <script src="{{asset('assets/admin/plugins/ckeditor/js/ckeditor.js')}}"></script>
    <script>
        $(window).on('load', function() {
            // classic editor
            ClassicEditor.create(document.querySelector('#classic-editor'))
                .then( editor => {
                    editor.ui.view.editable.element.style.height = '200px';
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
