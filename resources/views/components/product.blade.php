@if($template=='card')
<div class="product-item">
    <div class="product-img img-zoom-effect">
        <a href="{{route('catalog.product', ['product_slug' => $product->slug, ])}}">
            <img class="img-full" src="{{asset('assets/uploads/product/'.$product->image)}}" alt="{{$product->name}}">
        </a>
    </div>
    <div class="product-content">
        <a class="product-name pb-1" href="{{route('catalog.product', ['product_slug' => $product->slug])}}">{{$product->name}}</a>
        <div class="price-box">
            <div class="price-box-holder">
                <span>Cena: </span>
                @if($product->original_price>$product->selling_price)
                    <span class="old-price">{{$product->original_price}} zł</span>
                @endif
                <span class="new-price text-primary">{{$product->selling_price}} zł</span>
            </div>
        </div>
        <div class="product-add-action">
            <ul>
                <li>
                    <a href="#" class="addToCart" data-product-id="{{$product->id}}" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        <i class="pe-7s-cart"></i>
                    </a>
                </li>
                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal{{$product->id}}">
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
@elseif($template=='list')
<div class="product-list-item">
    <div class="product-list-img img-zoom-effect">
        <a href="{{route('catalog.product', ['product_slug' => $product->slug, ])}}">
            <img class="img-full" src="{{asset('assets/uploads/product/'.$product->image)}}" alt="{{$product->name}}">
        </a>
    </div>
    <div class="product-list-content">
        <a class="product-name pb-2" href="{{route('catalog.product', ['product_slug' => $product->slug])}}">{{$product->name}}</a>
        <div class="price-box pb-1">
            <span class="new-price">$120.00</span>
        </div>
        <div class="rating-box pb-2">
            <ul>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star-o"></i></li>
            </ul>
        </div>
        <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor tempus. Integer euismod, enim ut molestie dictum, nibh lectus scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna tortor, aliquet non eleifend.</p>
        <div class="product-add-action">
            <ul>
                <li>
                    <a href="#" class="addToCart" data-product-id="{{$product->id}}" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        <i class="pe-7s-cart"></i>
                    </a>
                </li>
                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal{{$product->id}}">
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
@endif
<!-- Begin Modal Area -->
<div class="modal quick-view-modal fade" id="quickModal{{$product->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-wrap row">
                    <div class="col-lg-6">
                        <div class="modal-img">
                            <div class="swiper-container modal-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" class="single-img">
                                            <img class="img-full" src="{{asset('assets/uploads/product/'.$product->image)}}" alt="Product Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="thumbs-arrow-holder">
                                <div class="swiper-container modal-thumbs">
                                    <div class="swiper-wrapper">
                                        <a href="#" class="swiper-slide">
                                            <img class="img-full" src="{{asset('assets/uploads/product/'.$product->image)}}" alt="Product Thumnail">
                                        </a>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="thumbs-button-wrap d-none d-md-block">
                                    <div class="thumbs-button-prev">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                    <div class="thumbs-button-next">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-9 pt-lg-0">
                        <div class="single-product-content">
                            <h2 class="title mb-3">{{$product->name}}</h2>
                            <div class="price-box pb-3">
                                <span class="new-price text-danger">{{$product->selling_price}}</span>
                            </div>
                            <div class="rating-box-wrap pb-55">
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="review-status ps-4">
                                    <a href="#">( 5 Customer Review )</a>
                                </div>
                            </div>
                            <p class="short-desc mb-9">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore</p>
                            <ul class="quantity-with-btn pb-9">
                                <li class="quantity">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                    </div>
                                </li>
                                <li class="add-to-cart">
                                    <a class="btn btn-custom-size lg-size btn-primary" href="cart.html">Add to cart</a>
                                </li>
                                <li class="wishlist-btn-wrap">
                                    <a class="custom-circle-btn" href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li class="compare-btn-wrap">
                                    <a class="custom-circle-btn" href="compare.html">
                                        <i class="pe-7s-refresh-2"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="product-category pb-3">
                                <span class="title">SKU:</span>
                                <ul>
                                    <li>
                                        <a href="#">Ch-256xl</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category pb-3">
                                <span class="title">Categories :</span>
                                <ul>
                                    <li>
                                        <a href="#">Office,</a>
                                    </li>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category product-tags pb-3">
                                <span class="title">Tags :</span>
                                <ul>
                                    <li>
                                        <a href="#">Furniture</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category social-link align-items-center pb-lg-8">
                                <span class="title pe-3">Share:</span>
                                <ul>
                                    <li>
                                        <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Tumblr" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-tumblr"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-dribbble"></i>
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
<!-- Modal Area End Here -->
