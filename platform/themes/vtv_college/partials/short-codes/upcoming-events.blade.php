@php
    $posts = get_posts_by_category($category, 3);
@endphp
<div class="row ml-0 mr-0">
    <div class="upcoming-events">
        <div class="bg-event-tin-tuc-sukien">
            <div class="bg-fake"></div>
            <div class="pl-3 pr-3 mt-3">
                <h3 class="text-roboto-medium font-size-18">
                    {{ $title }}
                </h3>
                <div class="hd-ct"></div>
            </div>
            <div class="row pl-3 pr-3 mt-3 mb-3">
                @if(count($posts) > 0)
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center">
                            <div class="card-image-upcoming-events">
                                <a href="{{ $post->url }}">
                                    <img src="{{ RvMedia::getImageUrl($post->image, 'featured', false, RvMedia::getDefaultImage()) }}" class="img-fluid">
                                </a>
                            </div>
                            <h3>
                                <a href="{{ $post->url }}" title="{{ $post->name }}">{{ $post->name }}</a>
                            </h3>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>


