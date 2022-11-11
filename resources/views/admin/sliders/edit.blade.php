@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h5 class="m-b-10">Редактирование категории "{{$slider->name}}"</h5>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.sliders.index')}}">Список категорий</a></li>
        <li class="breadcrumb-item"><a href="#!">Редактирование категории "{{$slider->name}}"</a></li>
    </ul>
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <form role="form" action="{{route('admin.sliders.update', ['id' => $slider->id])}}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Название категории</label>
                                <input type="text" name="name" value="{{$slider->name}}" class="form-control" id="inputEmail4" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Символьный код категории</label>
                                <input type="text" class="form-control" value="{{$slider->slug}}" name="slug"  id="inputPassword4" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Описание категории</label>
                            <textarea name="description" id="classic-editor">{{$slider->description}}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="status" type="checkbox" id="status" {{ $slider->status==1?'checked':'' }}>
                                    <label class="form-check-label" for="status">Категория активна</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="popular" type="checkbox" id="popular" {{ $slider->popular==1?'checked':'' }}>
                                    <label class="form-check-label" for="popular">Популярная категория</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Title</label>
                                <input type="text" value="{{$slider->meta_title}}" name="meta_title" class="form-control" id="inputEmail4" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Description</label>
                                <input type="text" value="{{$slider->meta_descrip}}" class="form-control" name="meta_descrip"  id="inputPassword4" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Keywords</label>
                                <input type="text" class="form-control" value="{{$slider->meta_keywords}}" name="meta_keywords"  id="inputPassword4" placeholder="" required>
                            </div>
                        </div>
                        @if($slider->image)
                        <div class="form-row py-5">
                            <img src="{{asset('assets/uploads/category/'.$slider->image)}}" style="width: 150px" alt="">
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
