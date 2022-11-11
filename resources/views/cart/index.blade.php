@extends('layouts.app')
@section('content')
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{asset('assets/images/breadcrumb/bg/1-1-1920x400.webp')}}" style="background-image: url('{{asset('assets/images/breadcrumb/bg/1-1-1920x400.webp')}}');">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">Mój koszyk</h2>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Strona główna/</a>
                                </li>
                                <li>Mój koszyk</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="javascript:void(0)">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Usunąć</th>
                                            <th class="product-thumbnail">Obraz</th>
                                            <th class="cart-product-name">Produkt</th>
                                            <th class="product-price">Cena Jednostkowa</th>
                                            <th class="product-quantity">Ilość</th>
                                            <th class="product-subtotal">Całkowity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cartItems as $item)
                                        <tr>
                                            <td class="product_remove">
                                                <a href="" data-id="{{$item->id}}" class="deleteFromCartPage">
                                                    <i class="pe-7s-trash" data-tippy="Usunąć" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" tabindex="0"></i>
                                                </a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="{{route('catalog.product', [$item->product->slug])}}">
                                                    <img src="{{asset('assets/uploads/product/'.$item->product->image)  }}" style="width: 112px" alt="{{$item->product->name}}">
                                                </a>
                                            </td>
                                            <td class="product-name"><a href="{{route('catalog.product', [$item->product->slug])}}">{{$item->product->name}}</a></td>
                                            <td class="product-price"><span class="amount">{{$item->price}} zl</span></td>
                                            <td class="quantity">
                                                <div class="cart-plus-minus" data-id="{{$item->id}}">
                                                    <input class="cart-plus-minus-box" data-id="{{$item->id}}" value="{{$item->quantity}}" type="text">
                                                    <div class="dec qtybutton">
                                                        <i class="fa fa-minus"></i>
                                                    </div>
                                                    <div class="inc qtybutton">
                                                        <i class="fa fa-plus"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount" data-id="{{$item->id}}">{{$item->price*$item->quantity}} zl</span></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Łącznie</h2>
                                        <ul class="cart_total">
                                            <li>Łącznie <span>{{$total}} zl</span></li>
                                        </ul>
                                        <a href="{{route('cart.checkout')}}">Przejdź do kasy</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

