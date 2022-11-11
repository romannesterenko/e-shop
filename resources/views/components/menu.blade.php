<nav class="main-nav">
    <ul>
        <li>
            <a href="{{route('home')}}">Strona główna</a>
        </li>
        <li class="drop-holder">
            <a href="#">Kategorie produktów
                <i class="pe-7s-angle-down"></i>
            </a>
            <ul class="drop-menu">
                @foreach($categories as $category)
                    <li>
                        <a href="/catalog/c/{{$category->slug}}">{{$category->name}}</a>
                    </li>
                @endforeach
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
