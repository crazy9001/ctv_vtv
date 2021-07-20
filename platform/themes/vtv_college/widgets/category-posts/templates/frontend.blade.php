
@if (is_plugin_active('blog'))
    @php
        $posts = get_posts_by_category($config['category_id'], $config['limit']);
    @endphp
    <div class="item-hd p-2">
        <h3>{{ $config['name'] }}</h3>
        <div class="hd-ct"></div>
        @foreach ($posts as $post)
            <div class="mt-4">
                @if($config['show_image'] == 1)
                    <a href="{{ $post->url }}" data-number-line="2" title="{{ $post->name }}">
                        <img src="{{ RvMedia::getImageUrl($post->image, 'featured', false, RvMedia::getDefaultImage()) }}" class="img-fluid mx-auto d-block" title="{{ $post->name }}"/>
                    </a>
                @endif
                <h5 class="text-center">
                    <a href="{{ $post->url }}" data-number-line="2" title="{{ $post->name }}">{{ $post->name }}</a>
                </h5>
            </div>
        @endforeach
    </div>
@endif

