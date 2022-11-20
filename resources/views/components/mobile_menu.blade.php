
<div class="offcanvas-menu_area">
    <nav class="offcanvas-navigation">
        <ul class="mobile-menu">
            <li>
                <a href="{{ route('home') }}">
                    <span class="mm-text">Strona główna</span>
                </a>
            </li>
            <li class="menu-item-has-children">
                <a href="#">
                    <span class="mm-text">Kategorie produktów
                        <i class="pe-7s-angle-down"></i>
                    </span>
                </a>
                <ul class="sub-menu">
                    @foreach($categories as $category)
                        <li class="menu-item-has-children">
                            <a href="@if($category->child()->count()==0){{route('catalog.category', $category->slug)}}@endif">
                                <span class="mm-text">{{$category->name}}
                                    @if($category->child()->count()>0)
                                        <i class="pe-7s-angle-down"></i>
                                    @endif
                                </span>
                            </a>
                            @if($category->child()->count()>0)
                                <ul class="sub-menu">
                                    @foreach($category->child() as $child_category)
                                        <li>
                                            <a href="{{route('catalog.category', $child_category->slug)}}">
                                                <span class="mm-text">{{$child_category->name}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </li>

            <li>
                <a href="about.html">
                    <span class="mm-text">About Us</span>
                </a>
            </li>
            <li>
                <a href="contact.html">
                    <span class="mm-text">Contact</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
