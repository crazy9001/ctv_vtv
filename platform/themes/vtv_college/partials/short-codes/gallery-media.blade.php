@php $galleries = get_galleries(5); @endphp
{{--@if (!$galleries->isEmpty())--}}
{{--    <section class="section-home">--}}
{{--        <div class="bg-media">--}}
{{--            <div class="title d-flex justify-content-center">--}}
{{--                <h3>{{ $title }}</h3>--}}
{{--            </div>--}}
{{--            <div class="media-content d-flex justify-content-center">--}}
{{--                <div class="text-content text-center">--}}
{{--                      <span>--}}
{{--                        {{ $description }}--}}
{{--                      </span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="w-100 d-flex justify-content-center">--}}
{{--                <div id="wrapper_bu">--}}
{{--                    @foreach($galleries as $index => $gallery)--}}
{{--                        <div id="bu{{$index +1}}">--}}
{{--                            <div class="w-100 h-100" style="position: relative">--}}
{{--                                <img class="img-resize" src="{{ RvMedia::getImageUrl($gallery->image, 'featured') }}" alt="{{ $gallery->name }}">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endif--}}

@if (!$galleries->isEmpty())
    <section class="section-home">
    <div class="bg-media">
        <div class="title d-flex justify-content-center">
            <h3>>{{ $title }}</h3>
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
    </div>
</section>
@endif
