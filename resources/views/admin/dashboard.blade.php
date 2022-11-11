@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h5 class="m-b-10">Панель управления</h5>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="#!">Панель управления</a></li>
    </ul>
@endsection

@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2>Панель управления</h2>
                </div>
                <div class="card-body">
                    <div class="col">
                        Content
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

