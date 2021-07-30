@php Theme::set('section-name', $gallery->name) @endphp

<div class="bg-banner-gioithieu d-flex flex-column justify-content-center align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h3>Thư viện ảnh</h3>
{{--        <h5 class="font-size-14 text-roboto-white text-center mt-2">--}}
{{--            {{ $gallery->description }}--}}
{{--        </h5>--}}
    </div>
    <div class="d-flex flex-row justify-content-center align-items-center mt-2">
        <div class="line"></div>
        <i class="fas fa-book-open" style="color: #fff"></i>
        <div class="line2"></div>
    </div>

    <div class="d-flex flex-row align-items-center banner-slug">
        {!! Theme::partial('breadcrumbs') !!}
    </div>

</div>


<div class="d-flex flex-row title-media-detail">
    <div class="container flex-column d-flex justify-content-center pt-3">
        <h3>{{ $gallery->name }}</h3>
        <h4 class="mt-3">{{ $gallery->description }}</h4>
    </div>
</div>

<section class="section-media-detail container">
    @foreach (gallery_meta_data($gallery) as $image)
        @if ($image)
            <img src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" alt="{{ clean(Arr::get($image, 'description')) }}">
        @endif
    @endforeach
</section>
