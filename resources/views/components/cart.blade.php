<div class="offcanvas-minicart_wrapper" id="miniCart">
    <div class="offcanvas-body">
        <div class="minicart-content">
            <div class="minicart-heading">
                <h4 class="mb-0">Koszyk</h4>
                <a href="#" class="button-close"><i class="pe-7s-close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
            </div>
            <ul class="minicart-list">
                @foreach($cartItems as $item)
                    <li class="minicart-product">
                        <a class="product-item_remove" href="#">
                            <i class="pe-7s-trash" data-tippy="Czy chcesz usunąć?" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                        </a>
                        <a href="shop.html" class="product-item_img">
                            <img class="img-full" src="{{asset('assets/uploads/product/'.$item->product->image)}}" alt="Product Image">
                        </a>
                        <div class="product-item_content">
                            <a class="product-item_title" href="{{route('catalog.product', [$item->product->slug])}}">{{$item->product->name}}</a>
                            <span class="product-item_quantity">{{$item->quantity}} x {{$item->price}} zl</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="minicart-item_total">
            <span>Kwota zakupów</span>
            <span class="ammount">{{$total}} zl</span>
        </div>
        <div class="group-btn_wrap d-grid gap-2">
            <a href="cart.html" class="btn btn-dark btn-primary-hover">Zobacz Koszyk</a>
            <a href="checkout.html" class="btn btn-dark btn-primary-hover">Przejdź do kasy</a>
        </div>
    </div>
</div>
<div class="global-overlay"></div>
