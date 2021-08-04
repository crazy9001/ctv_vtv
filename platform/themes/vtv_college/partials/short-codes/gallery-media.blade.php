@php $galleries = get_galleries(5); @endphp
@if (!$galleries->isEmpty())
    <section class="section-home">
    <div class="bg-media">
        <div class="title d-flex justify-content-center">
            <h3>{{ $title }}</h3>
        </div>
        <div class="media-content d-flex justify-content-center">
            <div class="text-content text-center">
                <span> {{ $description }}</span>
            </div>
        </div>
        <div class="w-100 justify-content-center d-none d-md-flex">
            <div class="gallery-controls">
                <button class="gallery-controls-previous">
                    <i class="fas fa-chevron-left" style="color: #fff"></i>
                </button>
            </div>
            <div class="gallery">
                <div class="gallery-container">
                    @foreach($galleries as $index => $gallery)
                        <a href="{{ $gallery->url }}">
                            <img
                                class="gallery-item gallery-item-{{ $index + 1 }}"
                                src="{{ RvMedia::getImageUrl($gallery->image, 'featured') }}" alt="{{ $gallery->name }}"
                                data-index="{{ $index + 1 }}"
                            />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container d-md-none slick-images responsive autoplay mt-5" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
            @foreach($galleries as $index => $gallery)
                <div class="col-4">
                    <div class="card-image">
                        <a href="{{ $gallery->url }}">
                            <img src="{{ RvMedia::getImageUrl($gallery->image, 'featured') }}" class="img-resize img-border-radius"/>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
