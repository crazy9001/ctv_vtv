@php
    $posts = get_posts_by_category($category, 3);
@endphp
<div class="container mt-3 mb-3">
    <div class="row">
        <div class="event-tin-tuc-sukien">
            <div class="bg-event-tin-tuc-sukien">
                <div class="bg-fake"></div>
                <div class="p-2">
                    <h3 class="text-roboto-medium font-size-18">
                        {{ $title }}
                    </h3>
                    <div class="hd-ct"></div>
                </div>
                <div class="row p-2">
                    @if(count($posts) > 0)
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6 d-flex flex-column">
                                <div class="card-image">
                                    <a href="{{ $post->url }}">
                                        <img src="{{ RvMedia::getImageUrl($post->image, 'featured', false, RvMedia::getDefaultImage()) }}"
                                             alt="{{ $post->name }}" class="img-resize img-border-radius-left" title="{{ $post->name }}"/>
                                    </a>
                                </div>
                                <h3 class="text-roboto-medium font-size-18 mt-2">
                                    <a href="{{ $post->url }}" title="{{ $post->name }}">{{ $post->name }}</a>
                                </h3>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
