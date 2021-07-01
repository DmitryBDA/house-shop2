<ul>
    @php
        function buildMenu($items, $lavel)
        {
            foreach ($items as $item) {
                if (isset($item->children)) {
    @endphp
    <li>
        <a href="{{ route("$item->url") }}">{{ $item->name }} @if($lavel == 2)<i class="fa fa-angle-right" aria-hidden="true"></i> @endif</a>
        <ul class="@if($lavel == 1)sub_menu @else multi_label_menu @endif">
            @php buildMenu($item->children, $lavel + 1) @endphp
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
buildMenu($menuitems, 1)
    @endphp
</ul>

