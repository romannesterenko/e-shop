@extends('admin.app')

@section('additional_headers')
@endsection

@section('pageInfo')
    <div class="page-header-title">
        <h5 class="m-b-10">Создание слайдера</h5>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.sliders.index')}}">Список слайдеров</a></li>
        <li class="breadcrumb-item"><a href="#!">Создание слайдера</a></li>
    </ul>
@endsection

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <form role="form" action="{{route('admin.sliders.store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail4">Название слайдера</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="inputEmail4" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Заголовок слайдера</label>
                            <textarea name="title" id="title-editor">{{old('title')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Описание слайдера</label>
                            <textarea name="description" id="classic-editor">{{old('description')}}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="background_image">
                                    <label class="custom-file-label" for="validatedCustomFile">Выберите изображение...</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="small_image">
                                    <label class="custom-file-label" for="validatedCustomFile">Выберите изображение...</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail4">Ссылка на кнопке</label>
                            <input type="text" name="link" value="{{old('link')}}" class="form-control" id="inputEmail4" placeholder="" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Создать</button>
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
                    editor.ui.view.editable.element.style.height = '100px';
                })
                .catch(error => {
                    console.error(error);
                });
            // classic editor
            ClassicEditor.create(document.querySelector('#title-editor'))
                .then( editor => {
                    editor.ui.view.editable.element.style.height = '100px';
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
