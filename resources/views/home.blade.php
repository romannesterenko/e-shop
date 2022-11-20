@extends('layouts.app')

@section('content')

    <!-- Begin Slider Area -->
    <div class="slider-area">

        <!-- Main Slider -->
        <div class="swiper-container main-slider-2 swiper-arrow with-bg_white">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                    <div class="swiper-slide animation-style-02 slide-style-2">
                        <div class="slide-inner bg-height py-6 py-lg-0" data-bg-image="{{asset('assets/uploads/slider/bg/'.$slider->background_image)}}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 align-self-center order-2 order-lg-1">
                                        <div class="slide-content text-night-rider">
                                            <h2 class="title mb-4">{!!$slider->title!!}</h2>
                                            <p class="short-desc mb-10">{{$slider->description}}</p>
                                            <div class="button-wrap pb-2 pb-md-0">
                                                <a class="btn btn-custom-size lg-size btn-primary" href="{{$slider->link}}">Kup Teraz</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 order-1 order-lg-2">
                                        <div class="inner-img">
                                            <div class="scene fill">
                                                <div class="expand-width" data-depth="0.2">
                                                    <img src="{{asset('assets/uploads/slider/small/'.$slider->small_image)}}" alt="Inner Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination with-bg d-md-none"></div>

            <!-- Custom Arrows -->
            <div class="custom-arrow-wrap d-none d-md-block">
                <div class="custom-button-prev"></div>
                <div class="custom-button-next"></div>
            </div>
        </div>

    </div>
    <!-- Slider Area End Here -->

    <!-- Begin Product Area -->
    <div class="product-area section-space-top-100">
        <div class="container">
            <div class="section-title style-2 pb-55">
                <h2 class="title mb-0">Najlepsze kategorie</h2>
            </div>
            <div class="row">
                @foreach($top_categories as $top_c)
                    <div class="product-custom-col col-12">
                        <div class="product-category-item">
                            <a class="product-category-img img-zoom-effect" href="{{route('catalog.category', ['slug' => $top_c->slug])}}">
                                <img src="{{asset('assets/uploads/category/'.$top_c->image)}}" alt="{{$top_c->name}}">
                            </a>
                            <div class="product-category-content pt-5">
                                <h2 class="title">
                                    <a href="{{route('catalog.category', ['slug' => $top_c->slug])}}">{{$top_c->name}}</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->

    <div class="banner-area banner-style-3 section-space-top-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-md-8 pt-lg-0">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{asset('assets/uploads/444.webp')}}" alt="Banner Image">
                            <div class="inner-content text-night-rider">
                                <h3 class="offer">Od 25 zl</h3>
                                <h2 class="title">Przynęta na wody <br> wobler</h2>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size btn-primary" href="shop.html">na zakupy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-8 pt-lg-0">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{asset('assets/uploads/555.webp')}}" alt="Banner Image">
                            <div class="inner-content text-night-rider">
                                <h3 class="offer">Od 25 zl</h3>
                                <h2 class="title">JiGGING <br> wobler</h2>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size btn-primary" href="shop.html">na zakupy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-8">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{asset('assets/uploads/666.webp')}}" alt="Banner Image">
                            <div class="inner-content text-right text-night-rider">
                                <h3 class="offer">From $96</h3>
                                <h2 class="title">Mini Popper <br> 45mm 3g</h2>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size btn-primary" href="shop.html">na zakupy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-8">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{asset('assets/uploads/777.webp')}}" alt="Banner Image">
                            <div class="inner-content text-right text-night-rider">
                                <h3 class="offer">From $96</h3>
                                <h2 class="title">Mysz <br> przynęta</h2>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size btn-primary" href="shop.html">na zakupy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Product Area -->
    <div class="background-img" data-bg-image="{{asset('/assets/images/background-img/1-2-1920x716.jpg')}}">
        <div class="product-area section-space-y-axis-100 product-arrow">
            <div class="container">
                <div class="section-title pb-55">
                    <h2 class="title mb-0">Towary promocyjne</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container product-slider">
                            <div class="swiper-wrapper text-heading">
                                @foreach($pomotional_products as $prom_product)
                                    <div class="swiper-slide">
                                        <x-product template="card" :product="$prom_product"></x-product>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="product-button-wrap pt-10">
                            <div class="product-button-prev">
                                <i class="pe-7s-angle-left"></i>
                            </div>
                            <div class="product-button-next">
                                <i class="pe-7s-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->

    <!-- Begin Product Area -->
    <div class="product-area section-space-top-100">
        <div class="container">
            <div class="section-title style-2 pb-55">
                <h2 class="title mb-0">SPECIAL DEALS</h2>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-banner img-hover-effect">
                        <div class="product-banner-img img-zoom-effect">
                            <a href="shop.html">
                                <img class="img-full" src="assets/images/product/medium-size/special-deals/banner/2-1-290x350.jpg" alt="Product Banner">
                            </a>
                            <div class="product-banner-content text-white">
                                <h2 class="offer mb-4">Have a Special <br> Discount</h2>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size btn-white btn-hover-primary" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="special-deals-button-wrap pt-10">
                                <div class="special-deals-button-prev">
                                    <i class="pe-7s-angle-left"></i>
                                </div>
                                <div class="special-deals-button-next">
                                    <i class="pe-7s-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 pt-6 pt-lg-0">
                    <div class="swiper-container special-deals-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide product-item special-deals-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="shop.html">
                                        <img class="img-full" src="assets/images/product/medium-size/special-deals/2-1-290x350.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name pb-1" href="shop.html">Fuel Injector</a>
                                    <div class="price-box">
                                        <div class="price-box-holder">
                                            <span>Price:</span>
                                            <span class="new-price text-primary">$130.00</span>
                                        </div>
                                    </div>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product-item special-deals-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="shop.html">
                                        <img class="img-full" src="assets/images/product/medium-size/special-deals/2-2-290x350.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name pb-1" href="shop.html">A/C Compressor</a>
                                    <div class="price-box">
                                        <div class="price-box-holder">
                                            <span>Price:</span>
                                            <span class="new-price text-primary">$150.00</span>
                                        </div>
                                    </div>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product-item special-deals-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="shop.html">
                                        <img class="img-full" src="assets/images/product/medium-size/special-deals/2-3-290x350.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name pb-1" href="shop.html">Shock Absorbers</a>
                                    <div class="price-box">
                                        <div class="price-box-holder">
                                            <span>Price:</span>
                                            <span class="new-price text-primary">$120.00</span>
                                        </div>
                                    </div>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->

    <!-- Begin Shipping Area -->
    <div class="shipping-area section-space-top-100">
        <div class="container">
            <div class="shipping-bg" data-bg-image="assets/images/shipping/bg/1-1-1280x202.jpg">
                <div class="row shipping-wrap py-5 py-xl-0">
                    <div class="col-lg-4">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/plane.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Darmowa dostawa</h2>
                                <p class="short-desc mb-0">Zapewnij bezpłatną dostawę do domu dla wszystkich produktów powyżej 100 USD</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-4 pt-lg-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/earphones.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Wsparcie online</h2>
                                <p class="short-desc mb-0">Aby usatysfakcjonować naszych klientów staramy się udzielać wsparcia online</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-4 pt-lg-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/shield.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Bezpieczna płatność</h2>
                                <p class="short-desc mb-0">Zapewniamy, że nasz produkt jest dobrej jakości przez cały czas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shipping Area End Here -->

    <!-- Begin Product Area -->
    <div class="product-area section-space-y-axis-100">
        <div class="container">
            <div class="section-title style-2 pb-55">
                <h2 class="title mb-0">New Products</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-item new-product-item">
                        <div class="product-img img-zoom-effect">
                            <a href="shop.html">
                                <img class="img-full" src="assets/images/product/medium-size/new-product/1-1-620x350.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <a class="product-name pb-1" href="shop.html">Auto Clutch & Brake</a>
                            <div class="price-box">
                                <div class="price-box-holder">
                                    <span>Price:</span>
                                    <span class="new-price text-primary">$120.00</span>
                                </div>
                            </div>
                            <div class="product-add-action">
                                <ul>
                                    <li>
                                        <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                    </li>
                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-shuffle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-8 pt-lg-0">
                    <div class="product-item new-product-item">
                        <div class="product-img img-zoom-effect">
                            <a href="shop.html">
                                <img class="img-full" src="assets/images/product/medium-size/new-product/1-2-290x350.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <a class="product-name pb-1" href="shop.html">Fuel Injector</a>
                            <div class="price-box">
                                <div class="price-box-holder">
                                    <span>Price:</span>
                                    <span class="new-price text-primary">$130.00</span>
                                </div>
                            </div>
                            <div class="product-add-action">
                                <ul>
                                    <li>
                                        <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                    </li>
                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-shuffle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-8 pt-lg-0">
                    <div class="product-item new-product-item">
                        <div class="product-img img-zoom-effect">
                            <a href="shop.html">
                                <img class="img-full" src="assets/images/product/medium-size/new-product/1-3-290x350.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <a class="product-name pb-1" href="shop.html">A/C Compressor</a>
                            <div class="price-box">
                                <div class="price-box-holder">
                                    <span>Price:</span>
                                    <span class="new-price text-primary">$150.00</span>
                                </div>
                            </div>
                            <div class="product-add-action">
                                <ul>
                                    <li>
                                        <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                    </li>
                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-shuffle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-8">
                    <div class="product-item new-product-item">
                        <div class="product-img img-zoom-effect">
                            <a href="shop.html">
                                <img class="img-full" src="assets/images/product/medium-size/new-product/1-4-290x350.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <a class="product-name pb-1" href="shop.html">Shock Absorbers</a>
                            <div class="price-box">
                                <div class="price-box-holder">
                                    <span>Price:</span>
                                    <span class="new-price text-primary">$180.00</span>
                                </div>
                            </div>
                            <div class="product-add-action">
                                <ul>
                                    <li>
                                        <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                    </li>
                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-shuffle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-8">
                    <div class="product-item new-product-item">
                        <div class="product-img img-zoom-effect">
                            <a href="shop.html">
                                <img class="img-full" src="assets/images/product/medium-size/new-product/1-5-290x350.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <a class="product-name pb-1" href="shop.html">Catalytic Converter</a>
                            <div class="price-box">
                                <div class="price-box-holder">
                                    <span>Price:</span>
                                    <span class="new-price text-primary">$200.00</span>
                                </div>
                            </div>
                            <div class="product-add-action">
                                <ul>
                                    <li>
                                        <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                    </li>
                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-shuffle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-8">
                    <div class="product-item new-product-item">
                        <div class="product-img img-zoom-effect">
                            <a href="shop.html">
                                <img class="img-full" src="assets/images/product/medium-size/new-product/1-6-290x350.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <a class="product-name pb-1" href="shop.html">Tire Pressure Gauge</a>
                            <div class="price-box">
                                <div class="price-box-holder">
                                    <span>Price:</span>
                                    <span class="new-price text-primary">$220.00</span>
                                </div>
                            </div>
                            <div class="product-add-action">
                                <ul>
                                    <li>
                                        <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                    </li>
                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-shuffle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-8">
                    <div class="product-item new-product-item">
                        <div class="product-img img-zoom-effect">
                            <a href="shop.html">
                                <img class="img-full" src="assets/images/product/medium-size/new-product/1-7-290x350.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <a class="product-name pb-1" href="shop.html">Power Steering Fluid</a>
                            <div class="price-box">
                                <div class="price-box-holder">
                                    <span>Price:</span>
                                    <span class="new-price text-primary">$230.00</span>
                                </div>
                            </div>
                            <div class="product-add-action">
                                <ul>
                                    <li>
                                        <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                    </li>
                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-shuffle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->

    <!-- Begin Brand Area -->
    <div class="brand-area">
        <div class="container">
            <div class="brand-nav">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container brand-slider-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="assets/images/brand/1-1.png" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="assets/images/brand/1-2.png" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="assets/images/brand/1-3.png" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="assets/images/brand/1-4.png" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="assets/images/brand/1-5.png" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="assets/images/brand/1-6.png" alt="Brand Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End Here -->

    <!-- Begin Blog Area -->
    <div class="blog-area section-space-y-axis-100">
        <div class="container">
            <div class="section-title style-2 pb-55">
                <h2 class="title mb-0">Latest Blog</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container blog-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="blog-item">
                                    <div class="blog-img img-hover-effect">
                                        <a class="img-zoom-effect" href="blog.html">
                                            <img class="img-full" src="assets/images/blog/medium-size/1-1-400x250.jpg" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content pt-6">
                                        <div class="blog-meta text-paynes-grey pb-1">
                                            <ul>
                                                <li class="author">
                                                    <a href="#">
                                                        <i class="pe-7s-user"></i>
                                                        BY: ADMIN
                                                    </a>
                                                </li>
                                                <li class="date">
                                                    <i class="pe-7s-date"></i>
                                                    27 FEB 2021
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="mb-3">
                                            <a class="title" href="blog.html">Lorem ipsum dolor sit ametco</a>
                                        </h2>
                                        <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad minim veniam quis nostrud</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-matterhorn" href="blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-item">
                                    <div class="blog-img img-hover-effect">
                                        <a class="img-zoom-effect" href="blog.html">
                                            <img class="img-full" src="assets/images/blog/medium-size/1-2-400x250.jpg" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content pt-6">
                                        <div class="blog-meta text-paynes-grey pb-1">
                                            <ul>
                                                <li class="author">
                                                    <a href="#">
                                                        <i class="pe-7s-user"></i>
                                                        BY: ADMIN
                                                    </a>
                                                </li>
                                                <li class="date">
                                                    <i class="pe-7s-date"></i>
                                                    27 FEB 2021
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="mb-3">
                                            <a class="title" href="blog.html">Vivamus blandit gravida</a>
                                        </h2>
                                        <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad minim veniam quis nostrud</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-matterhorn" href="blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-item">
                                    <div class="blog-img img-hover-effect">
                                        <a class="img-zoom-effect" href="blog.html">
                                            <img class="img-full" src="assets/images/blog/medium-size/1-3-400x250.jpg" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content pt-6">
                                        <div class="blog-meta text-paynes-grey pb-1">
                                            <ul>
                                                <li class="author">
                                                    <a href="#">
                                                        <i class="pe-7s-user"></i>
                                                        BY: ADMIN
                                                    </a>
                                                </li>
                                                <li class="date">
                                                    <i class="pe-7s-date"></i>
                                                    27 FEB 2021
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="mb-3">
                                            <a class="title" href="blog.html">Pellentesque molestie ligula</a>
                                        </h2>
                                        <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad minim veniam quis nostrud</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-matterhorn" href="blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End Here -->
@endsection
