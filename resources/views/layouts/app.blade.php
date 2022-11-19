<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('meta_data')
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/vendor/Pe-icon-7-stroke.css')}}" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/ion.rangeSlider.min.css')}}" />

    <!-- Minify Version -->
    <!-- <link rel="stylesheet" {{asset('href="assets')}}/css/vendor/vendor.min.css"> -->
    <!-- <link rel="stylesheet" {{asset('href="assets')}}/css/plugins/plugins.min.css"> -->

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}"> -->

</head>

<body>
<!--<div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>-->
<div class="main-wrapper">
    <input type="hidden" id="session_id" name="session_id" value="{{session()->getId()}}"></input>
    <!-- Begin Main Header Area -->
    <header class="main-header-area">
        <div class="header-middle header-sticky py-6 py-lg-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="header-middle-wrap position-relative">

                            <a href="{{route('home')}}" class="header-logo">
                                <img src="{{asset('assets/images/logo/dark.png')}}" alt="Header Logo">
                            </a>

                            <div class="main-menu d-none d-lg-block">
                                <x-menu></x-menu>
                            </div>
                            <div class="header-right">
                                <ul>
                                    <li class="dropdown d-none d-lg-block">
                                        <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                            <i class="pe-7s-user"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButton">
                                            <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                            <li><a class="dropdown-item" href="login-register.html">Login | Register</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#exampleModal" class="search-btn bt" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-search"></i>
                                        </a>
                                    </li>
                                    <li class="d-none d-lg-block">
                                        <a href="wishlist.html">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    <li class="minicart-wrap me-3 me-lg-0">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <i class="pe-7s-shopbag"></i>
                                            <span class="quantity">...</span>
                                        </a>
                                    </li>
                                    <li class="mobile-menu_wrap d-block d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                            <i class="pe-7s-menu"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu_wrapper" id="mobileMenu">
            <div class="offcanvas-body">
                <div class="inner-body">
                    <div class="offcanvas-top">
                        <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                    </div>
                    <div class="offcanvas-user-info text-center px-6 pb-5">
                        <div class=" text-silver">
                            <p class="shipping mb-0">Free delivery on order over <span class="text-primary">$200</span></p>
                        </div>
                        <ul class="dropdown-wrap justify-content-center text-silver">
                            <li class="dropdown dropup">
                                <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                    English
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="languageButtonTwo">
                                    <li><a class="dropdown-item" href="#">French</a></li>
                                    <li><a class="dropdown-item" href="#">Italian</a></li>
                                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropup">
                                <button class="btn btn-link dropdown-toggle ht-btn usd-dropdown" type="button" id="currencyButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                    USD
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="currencyButtonTwo">
                                    <li><a class="dropdown-item" href="#">GBP</a></li>
                                    <li><a class="dropdown-item" href="#">ISO</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropup">
                                <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="pe-7s-users"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                    <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                    <li><a class="dropdown-item" href="login-register.html">Login | Register</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas-menu_area">
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">
                                            <span class="mm-text">Home
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">
                                                <span class="mm-text">Home One</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">
                                                <span class="mm-text">Home Two</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">
                                        <span class="mm-text">About Us</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                            <span class="mm-text">Shop
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                    <span class="mm-text">Shop Layout
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop.html">
                                                        <span class="mm-text">Shop Default</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-fullwidth.html">
                                                        <span class="mm-text">Shop Grid Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Shop Right Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-fullwidth.html">
                                                        <span class="mm-text">Shop List Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-left-sidebar.html">
                                                        <span class="mm-text">Shop List Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-right-sidebar.html">
                                                        <span class="mm-text">Shop List Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                    <span class="mm-text">Product Style
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product.html">
                                                        <span class="mm-text">Single Product Default</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-group.html">
                                                        <span class="mm-text">Single Product Group</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-variable.html">
                                                        <span class="mm-text">Single Product Variable</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sale.html">
                                                        <span class="mm-text">Single Product Sale</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky.html">
                                                        <span class="mm-text">Single Product Sticky</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-affiliate.html">
                                                        <span class="mm-text">Single Product Affiliate</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                    <span class="mm-text">Product Related
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="my-account.html">
                                                        <span class="mm-text">My Account</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">
                                                        <span class="mm-text">Login | Register</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">
                                                        <span class="mm-text">Shopping Cart</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <span class="mm-text">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <span class="mm-text">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">
                                                        <span class="mm-text">Checkout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                            <span class="mm-text">Pages
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="faq.html">
                                                <span class="mm-text">Frequently Questions</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404.html">
                                                <span class="mm-text">Error 404</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                            <span class="mm-text">Blog
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                    <span class="mm-text">Blog Holder
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog.html">
                                                        <span class="mm-text">Blog Default</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-listview.html">Blog List View</a>
                                                </li>
                                                <li>
                                                    <a href="blog-detail.html">Blog Detail</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <span class="mm-text">Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-search">
                            <span class="searchbox-info">Zacznij pisać i naciśnij Enter, aby wyszukać lub ESC, aby zamknąć</span>
                            <form action="#" class="hm-searchbox">
                                <input type="text" name="Search entire store here..." value="Przeszukaj sklep tutaj..." onblur="if(this.value==''){this.value='Search entire store here...'}" onfocus="if(this.value=='Search entire store here...'){this.value=''}">
                                <button class="search-btn" type="submit" aria-label="searchbtn"><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-minicart_wrapper" id="miniCart">
            <div class="offcanvas-body cart_body">
                <div class="minicart-content">
                    <div class="minicart-heading">
                        <h4 class="mb-0">Koszyk</h4>
                        <a href="#" class="button-close"><i class="pe-7s-close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                    </div>
                </div>
                <div class="minicart-item_total">
                    <span>Kwota zakupów</span>
                </div>
                <div class="group-btn_wrap d-grid gap-2">
                    <a href="cart.html" class="btn btn-dark btn-primary-hover">Zobacz Koszyk</a>
                    <a href="checkout.html" class="btn btn-dark btn-primary-hover">Przejdź do kasy</a>
                </div>

            </div>
        </div>
        <div class="global-overlay"></div>
    </header>
    <!-- Main Header Area End Here -->

    @yield('content')

    <!-- Begin Footer Area -->
    <div class="footer-area">
        <div class="footer-top section-space-y-axis-100 text-lavender" data-bg-image="{{asset('assets/images/background-img/1-4-1920x419.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget-item">
                            <div class="footer-logo pb-4">
                                <a href="index.html">
                                    <img src="{{asset('assets/images/logo/light.png')}}" alt="Logo">
                                </a>
                            </div>
                            <p class="short-desc mb-2">Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="social-link pt-2">
                                <ul>
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
                                        <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                        <div class="widget-item">
                            <h3 class="widget-title mb-5">Quick Links</h3>
                            <ul class="widget-list-item">
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Support</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Helpline</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Courses</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Event</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Subject</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                        <div class="widget-item">
                            <h3 class="widget-title mb-5">Company</h3>
                            <ul class="widget-list-item">
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Speakers</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Tricket</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Seminar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                        <div class="widget-item">
                            <h3 class="widget-title mb-5">About Tromic</h3>
                            <ul class="widget-list-item">
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">How to Shop</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Contact us</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">My Wishlist</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Checkout</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Log in</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i>
                                    <a href="#">Help</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 pt-8 pt-lg-0">
                        <div class="widget-item">
                            <h3 class="widget-title mb-5">Store Information.</h3>
                        </div>
                        <div class="widget-contact-info pb-2">
                            <ul>
                                <li>
                                    2005 Stokes Isle Apartment. 896, Washington 10010, USA,
                                </li>
                                <li>
                                    <a href="mailto://info@example.com">info@example.com</a>
                                </li>
                                <li>
                                    <a href="tel://+68-120034509">(+68) 120034509</a>
                                </li>
                            </ul>
                        </div>
                        <div class="payment-method">
                            <a href="#">
                                <img src="{{asset('assets/images/payment/1.png')}}" alt="Payment Method">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-midnight-express py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <span class="copyright-text">© 2021 Tromic Made with <i class="fa fa-heart text-danger"></i> by  <a href="https://hasthemes.com/" rel="noopener" target="_blank">HasThemes</a> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End Here -->



    <!-- Begin Scroll To Top -->
    <a class="scroll-to-top" href="">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- Scroll To Top End Here -->

</div>

<!-- Global Vendor, plugins JS -->

<!-- JS Files
============================================ -->
<!-- Global Vendor, plugins JS -->

<!-- Vendor JS -->
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>

<!--Plugins JS-->
<script src="{{asset('assets/js/plugins/wow.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.nice-select.js')}}"></script>
<script src="{{asset('assets/js/plugins/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/tippy.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/mailchimp-ajax.js')}}"></script>

<!--Main JS (Common Activation Codes)-->
<script src="{{asset('assets/js/main.js')}}"></script>
<!-- <script src="{{asset('assets/js/main.min.js')}}"></script> -->

<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>
