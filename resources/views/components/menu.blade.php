<nav class="main-nav">
    <ul>
        <li>
            <a href="{{route('home')}}">Strona główna</a>
        </li>
        <li class="megamenu-holder">
            <a href="#">Kategorie produktów
                <i class="pe-7s-angle-down"></i>
            </a>
            <ul class="drop-menu megamenu">
                @foreach($categories as $category)
                    <li>
                        <span class="title"><a href="{{route('catalog.category', $category->slug)}}">{{$category->name}}</a></span>
                        <ul>
                            @foreach($category->child() as $child_category)
                                <li>
                                    <a href="{{route('catalog.category', $child_category->slug)}}">{{ $child_category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                <li>
                    <div class="banner">
                        <img src="{{ asset('assets/images/megamenu/banner/1.webp') }}" alt="Menu Banner">
                    </div>
                </li>
            </ul>
        </li>
        <li class="drop-holder">
            <a href="blog.html">Blog
                <i class="pe-7s-angle-down"></i>
            </a>
            <ul class="drop-menu">
                <li>
                    <a href="blog-listview.html">Blog List View</a>
                </li>
                <li>
                    <a href="blog-detail.html">Blog Detail</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="contact.html">Contact</a>
        </li>
    </ul>
</nav>
