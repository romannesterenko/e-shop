@extends('layouts.app')

@section('content')
    <!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{asset('assets/images/breadcrumb/bg/1-1-1920x400.webp')}}">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">{{$category->name}}</h2>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}"> Strona główna /</a>
                                </li>
                                <li>{{$category->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-lg-1 order-2 pt-10 pt-lg-0">
                        <div class="sidebar-area style-2">
                            <div class="widgets-searchbox widgets-area py-6 mb-9">
                                <form id="widgets-searchbox" action="#">
                                    <input class="input-field" type="text" placeholder="Szukaj">
                                    <button class="widgets-searchbox-btn" type="submit">
                                        <i class="pe-7s-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="widgets-area widgets-filter mb-9">
                                <h2 class="widgets-title mb-5">Filtr cen</h2>
                                <div class="price-filter">
                                    <input type="text" class="tromic-range-slider" name="tromic-range-slider" value="" data-type="double" data-min="16" data-from="16" data-to="300" data-max="350" data-grid="false" />
                                </div>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Kolor</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-checkbox">
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-1">
                                            <label class="label-checkbox mb-0" for="color-selection-1">Czerwony
                                                <span>(12)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-2" checked>
                                            <label class="label-checkbox mb-0" for="color-selection-2">Jasnoczarny
                                                <span>(09)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-3">
                                            <label class="label-checkbox mb-0" for="color-selection-3">Ciemny niebieski
                                                <span>(7)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-4">
                                            <label class="label-checkbox mb-0" for="color-selection-4">Szary
                                                <span>(11)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Rozmiar</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-checkbox">
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-1">
                                            <label class="label-checkbox mb-0" for="size-selection-1">M<span>(12)</span></label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-2" checked>
                                            <label class="label-checkbox mb-0" for="size-selection-2">L<span>(09)</span></label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-3">
                                            <label class="label-checkbox mb-0" for="size-selection-3">XL<span>(07)</span></label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-4">
                                            <label class="label-checkbox mb-0" for="size-selection-4">XXL<span>(11)</span></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-lg-2 order-1">
                        <div class="product-topbar">
                            <ul>
                                <li class="page-count">
                                    Znalazłem <span>23</span> produkty z <span>50</span>
                                </li>
                                <li class="product-view-wrap">
                                    <ul class="nav" role="tablist">
                                        <li class="grid-view" role="presentation">
                                            <a class="active" id="grid-view-tab" data-bs-toggle="tab" href="#grid-view" role="tab" aria-selected="true">
                                                <i class="fa fa-th"></i>
                                            </a>
                                        </li>
                                        <li class="list-view" role="presentation">
                                            <a id="list-view-tab" data-bs-toggle="tab" href="#list-view" role="tab" aria-selected="true">
                                                <i class="fa fa-th-list"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="short">
                                    <select class="nice-select rounded-0">
                                        <option value="1">Sortuj domyślnie</option>
                                        <option value="2">Sortuj według popularności</option>
                                        <option value="3">Sortuj według Ocenione</option>
                                        <option value="4">Sortuj według najnowszych</option>
                                        <option value="5">Sortuj według wysokiej ceny</option>
                                        <option value="6">Sortuj według niskiej ceny</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content text-charcoal pt-8">
                            <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                                <div class="product-grid-view row">
                                    @foreach($products as $product)
                                        <div class="col-xl-4 col-sm-6">
                                            <x-product template="card" :product="$product"></x-product>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                                <div class="product-list-view row">
                                    @foreach($products as $key => $product)
                                        <div class="col-12{{$key==0?'':' pt-8'}}">
                                            <x-product template="list" :product="$product"></x-product>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="pagination-area pt-10">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">&laquo;</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">&raquo;</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Content Area End Here -->
@endsection
