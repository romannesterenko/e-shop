@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h5 class="m-b-10">Редактирование статуса</h5>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.statuses.index')}}">Список статусов</a></li>
        <li class="breadcrumb-item"><a href="#!">Редактирование статуса</a></li>
    </ul>
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <form role="form" action="{{route('admin.statuses.update', ['id' => $status->id])}}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">Название статуса</label>
                                <input type="text" name="name" value="{{$status->name}}" class="form-control" id="name" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="slug">Символьный код статуса</label>
                                <input type="text" class="form-control" value="{{$status->code}}" name="code"  id="code" placeholder="" required>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleColorInput" class="form-label">Цвет</label>
                                <input name="color" type="color" class="form-control form-control-color" id="exampleColorInput" value="{{$status->color}}" title="Choose your color" style="height: 43px;">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleColorInput" class="form-label">&nbsp;</label>
                                <button type="submit" class="form-control btn btn-primary">Обновить</button>
                            </div>
                        </div>
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
