@extends('layouts.app')
@section('content')
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{asset('assets/images/breadcrumb/bg/1-1-1920x400.webp')}}" style="background-image: url('{{asset('assets/images/breadcrumb/bg/1-1-1920x400.webp')}}');">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">Strona kasy</h2>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Strona główna/</a>
                                </li>
                                <li>
                                    <a href="{{route('cart.index')}}">Mój koszyk/</a>
                                </li>
                                <li>Strona kasy</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-area section-space-y-axis-100">
            <div class="container">
                <form action="{{route('order.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-accordion">
                                <h3>Powracający klient? <span id="showlogin">Kliknij tutaj aby się zalogować</span></h3>
                                <div id="checkout-login" class="coupon-content" style="display: none;">
                                    <div class="coupon-info">
                                        <p class="coupon-text mb-1"></p>
                                        <p class="form-row-first">
                                            <label class="mb-1">Username or email <span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row-last">
                                            <label>Password <span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row">
                                            <input type="checkbox" id="remember_me">
                                            <label for="remember_me">Remember me</label>
                                        </p>
                                        <p class="lost-password"><a href="#">Lost your password?</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div>
                                <div class="checkbox-form">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Imię <span class="required">*</span></label>
                                                <input placeholder="Imię" placeholder="" name="first_name" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Nazwisko <span class="required">*</span></label>
                                                <input placeholder="Nazwisko" placeholder="" name="last_name" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="checkout-form-list">
                                                <label>Kod pocztowy <span class="required">*</span></label>
                                                <input placeholder="__-___" name="zipcode" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="checkout-form-list">
                                                <label>Miejscowość <span class="required">*</span></label>
                                                <input placeholder="Miejscowość" name="city" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="checkout-form-list">
                                                <label>Ulica <span class="required">*</span></label>
                                                <input placeholder="Ulica" name="street" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkout-form-list">
                                                <label>Dom<span class="required">*</span></label>
                                                <input type="text" name="house" placeholder="№" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="checkout-form-list">
                                                <label>Local</label>
                                                <input type="text" name="flat" placeholder="№">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Telefon <span class="required">*</span></label>
                                                <input type="text" name="phone" placeholder="+48 000-000-000">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="email" name="email" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list create-acc">
                                                <input id="cbox" type="checkbox">
                                                <label for="cbox">Utwórz konto?</label>
                                            </div>
                                            <div id="cbox-info" class="checkout-form-list create-account">
                                                <p>Utwórz konto, wpisując poniższe informacje. Jeśli wracasz klienta zaloguj się na górze strony.</p>
                                                <label>Hasło do konta <span class="required">*</span></label>
                                                <input placeholder="password" type="password" name="password">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Podsumowanie</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Produkt</th>
                                                <th class="cart-product-total">Razem</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cartItems as $item)
                                                <tr class="cart_item">
                                                    <td class="cart-product-name"> {{$item->product->name}}<strong class="product-quantity"> × {{$item->quantity}} szt.</strong></td>
                                                    <td class="cart-product-total" style="text-align: center;"><span class="amount">{{$item->quantity*$item->price}} zł</span></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Całkowita wartość koszyka</th>
                                            <td style="text-align: center"><span class="amount" style="text-align: center;">{{ $total }} zł</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Całkowita wartość zamówienia</th>
                                            <td style="text-align: center"><strong><span class="amount">{{ $total }} zł</span></strong></td>
                                            <input type="hidden" name="price" value="{{ $total }}">
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="#payment-1">
                                                    <h5 class="panel-title">
                                                        <a href="#" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                            Direct Bank Transfer.
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order
                                                            ID as the payment
                                                            reference. Your order won’t be shipped until the funds have cleared in
                                                            our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="#payment-2">
                                                    <h5 class="panel-title">
                                                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                                            Cheque Payment
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order
                                                            ID as the payment
                                                            reference. Your order won’t be shipped until the funds have cleared in
                                                            our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="#payment-3">
                                                    <h5 class="panel-title">
                                                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                                            PayPal
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order
                                                            ID as the payment
                                                            reference. Your order won’t be shipped until the funds have cleared in
                                                            our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input value="Place order" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

