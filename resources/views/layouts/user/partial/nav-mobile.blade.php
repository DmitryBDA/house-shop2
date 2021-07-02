<ul class="offcanvas_main_menu">
    @php
        function buildMenu2($items, $lavel)
        {
            foreach ($items as $item) {
                if (isset($item->children)) {
    @endphp
    {{$item->number}}
    <li class="menu-item-has-children ">
        <a href="{{ route("$item->url") }}">{{ $item->name }}</a>
        <ul class="sub-menu ">
            @php buildMenu2($item->children, $lavel + 1) @endphp
        </ul>
    </li>
    @php
        } else {
    @endphp
    <li>
        <a href="{{ route("$item->url") }}" class="">{{ $item->name }}</a>
    </li>
    @php
        }
    }
}
buildMenu2($menuitems, 1)
    @endphp
</ul>

