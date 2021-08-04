@if (is_plugin_active('blog'))
    @php
        if(is_plugin_active('live-template')){
            $featured = get_high_light_post_category($category ,$paginate, [
                'author',
                'categories' => function ($query) { $query->limit(1); },
            ]);
        } else {
            $featured = get_posts_by_category($category, $paginate, $paginate);
        }
    @endphp

    @if (!empty($featured))
        @switch($type)
            @case(1)
                {!! Theme::partial('box_new_1', ['title' => $title, 'featured' => $featured]) !!}
            @break

            @case(2)
                {!! Theme::partial('box_new_2', ['title' => $title, 'featured' => $featured]) !!}
            @break

            @case(3)
                {!! Theme::partial('box_new_3', ['title' => $title, 'featured' => $featured]) !!}
            @break

            @case(4)
                {!! Theme::partial('box_new_4', ['title' => $title, 'featured' => $featured]) !!}
            @break

            @default
                {!! Theme::partial('box_new_1', ['title' => $title, 'featured' => $featured]) !!}
        @endswitch
    @endif
@endif
