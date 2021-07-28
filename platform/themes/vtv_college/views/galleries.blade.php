@php Theme::set('section-name', __('Galleries')) @endphp

<div class="bg-banner-gioithieu d-flex flex-column justify-content-center align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h3>Thư viện ảnh</h3>
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

@if (isset($galleries) && !$galleries->isEmpty())
<section class="section-media">
    <div class="container d-flex justify-content-center">
        <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-md-3 mt-3">
                <div class="img-media">
                    <div class="position-relative">
                        <a href="{{ $gallery->url }}">
                            <img class="img-fluid" src="{{ RvMedia::getImageUrl($gallery->image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="{{ $gallery->name }}">
                        </a>
                        <div class="position-absolute ml-2">
                            <a href="{{ $gallery->url }}"><h3>{{ $gallery->name }}</h3></a>
                            <h4>15 mục</h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
