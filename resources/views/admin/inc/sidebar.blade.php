<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="{{route('admin.home')}}" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">E-shop</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Меню</label>
                </li>

                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Перейти на сайт</span></a>
                </li>

                <li class="nav-item {{ Route::currentRouteName()=='admin.home'?'active  pcoded-trigger':'' }}">
                    <a href="{{route('admin.home')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Панель управления</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu {{ str_contains(Route::currentRouteName(), 'admin.orders')?'active pcoded-trigger':'' }}">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Заказы</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('admin.orders.index') }}" class="{{ Route::currentRouteName()=='admin.orders.index'?'active-item':'' }}">Список заказов</a></li>
                        <li class=""><a href="{{ route('admin.statuses.index') }}" class="{{ Route::currentRouteName()=='admin.statuses.index'?'active-item':'' }}">Статусы заказов</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu {{ str_contains(Route::currentRouteName(), 'admin.categories')?'active pcoded-trigger':'' }}">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Категории</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('admin.categories.index') }}" class="{{ Route::currentRouteName()=='admin.categories.index'?'active-item':'' }}">Список категорий</a></li>
                        <li class=""><a href="{{ route('admin.categories.create') }}" class="{{ Route::currentRouteName()=='admin.categories.create'?'active-item':'' }}">Создание категории</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu {{ str_contains(Route::currentRouteName(), 'admin.products')?'active pcoded-trigger':'' }}">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Продукты</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('admin.products.index') }}" class="{{ Route::currentRouteName()=='admin.products.index'?'active-item':'' }}">Список продуктов</a></li>
                        <li class=""><a href="{{ route('admin.products.create') }}" class="{{ Route::currentRouteName()=='admin.products.create'?'active-item':'' }}">Создание продукта</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu {{ str_contains(Route::currentRouteName(), 'admin.sliders')?'active pcoded-trigger':'' }}">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Слайдеры</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('admin.sliders.index') }}" class="{{ Route::currentRouteName()=='admin.sliders.index'?'active-item':'' }}">Список слайдеров</a></li>
                        <li class=""><a href="{{ route('admin.sliders.create') }}" class="{{ Route::currentRouteName()=='admin.sliders.create'?'active-item':'' }}">Создание слайдеров</a></li>
                    </ul>
                </li>
                <li data-username="widget Statistic Data Table User card Chart" class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Widget</span><span class="pcoded-badge label label-info">100+</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="widget-statistic.html" class="">Statistic</a></li>
                        <li class=""><a href="widget-data.html" class="">Data</a></li>
                        <li class=""><a href="widget-table.html" class="">Table</a></li>
                        <li class=""><a href="widget-user-card.html" class="">User</a></li>
                        <li class=""><a href="widget-chart.html" class="">Chart</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
