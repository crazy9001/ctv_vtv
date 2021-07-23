@php Theme::set('section-name', $gallery->name) @endphp

{{--<article class="post post--single">--}}
{{--    <div class="post__content">--}}
{{--        <p>--}}
{{--            {{ $gallery->description }}--}}
{{--        </p>--}}
{{--        <div id="list-photo">--}}
{{--            @foreach (gallery_meta_data($gallery) as $image)--}}
{{--                @if ($image)--}}
{{--                    <div class="item" data-src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" data-sub-html="{{ clean(Arr::get($image, 'description')) }}">--}}
{{--                        <div class="photo-item">--}}
{{--                            <div class="thumb">--}}
{{--                                <a href="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}">--}}
{{--                                    <img src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" alt="{{ clean(Arr::get($image, 'description')) }}">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <br>--}}
{{--        {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, Theme::partial('comments')) !!}--}}
{{--    </div>--}}
{{--</article>--}}

<div class="bg-banner-gioithieu d-flex flex-column justify-content-center align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h3>Thư viện ảnh</h3>
        <h5 class="font-size-14 text-roboto-white text-center mt-2">
            {{ $gallery->description }}
        </h5>
    </div>

    <div class="d-flex flex-row justify-content-center align-items-center mt-2">
        <div class="line"></div>
        <i class="fas fa-book-open" style="color: #fff"></i>
        <div class="line2"></div>
    </div>
</div>

<section class="section-media-detail container">
    @foreach (gallery_meta_data($gallery) as $image)
        @if ($image)
            <img src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" alt="{{ clean(Arr::get($image, 'description')) }}">
        @endif
    @endforeach
</section>
