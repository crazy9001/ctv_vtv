@php Theme::set('section-name', $gallery->name) @endphp

<div class="bg-banner-gioithieu d-flex flex-column justify-content-center align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h3>{{ __('Photo library') }}</h3>
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

{{--<section class="section-media-detail container">--}}
{{--    @foreach (gallery_meta_data($gallery) as $image)--}}
{{--        @if ($image)--}}
{{--            <img src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}"--}}
{{--                 alt="{{ clean(Arr::get($image, 'description')) }}">--}}
{{--        @endif--}}
{{--    @endforeach--}}
{{--</section>--}}

<section class="section-media-detail container">
    <div>
        <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
            @foreach (gallery_meta_data($gallery) as $image)
                @if ($image)
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" itemprop="contentUrl" data-size="1024x1024">
                            <img src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" itemprop="thumbnail" alt="{{ clean(Arr::get($image, 'description')) }}"/>
                        </a>
                    </figure>
                @endif
            @endforeach
        </div>

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <!-- Background of PhotoSwipe.
           It's a separate element, as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>
            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">
                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <!--  Controls are self-explanatory. Order can be changed. -->
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

