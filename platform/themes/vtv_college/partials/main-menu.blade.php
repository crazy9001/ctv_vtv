<ul {!! clean($options) !!}>
    @foreach ($menu_nodes as $key => $row)
        <li>
            <a href="{{ $row->url }}" target="{{ $row->target }}" class="title-heder-bottom">
                @if ($row->icon_font)<i class='{{ trim($row->icon_font) }}'></i> @endif{{ $row->title }}
            </a>
            @if ($row->has_child)
                <i class="fa fa-angle-right"></i>
                {!!
                    Menu::generateMenu([
                        'menu'       => $menu,
                        'menu_nodes' => $row->child,
                        'view'       => 'main-menu',
                        'options'    => ['class' => 'subMenu'],
                    ])
                !!}
            @endif
        </li>
    @endforeach
</ul>
