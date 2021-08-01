
@if (is_plugin_active('blog'))
    @php
        $posts = get_posts_by_category($config['category_id'], $config['limit']);
    @endphp
    <div class="item-hd p-2">
        <h3>{{ $config['name'] }}</h3>
        <div class="hd-ct mb-4"></div>
        @foreach ($posts as $post)
            <div class="student-activities-border d-flex flex-row mb-4">
                @if($config['show_image'] == 1)
                    <a href="{{ $post->url }}"  title="{{ $post->name }}">
                        <img src="{{ RvMedia::getImageUrl($post->image, 'featured', false, RvMedia::getDefaultImage()) }}"/>
                    </a>
                @endif
                <h5> <a href="{{ $post->url }}"  title="{{ $post->name }}">{{ $post->name }}</a></h5>
            </div>
        @endforeach
    </div>

@endif

