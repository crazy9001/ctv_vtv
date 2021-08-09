@php Theme::set('section-name', $post->name) @endphp

<div class="bg-banner-gioithieu d-flex flex-column justify-content-center align-items-center">
    <h3>Chi tiết tin tức</h3>
    <div class="d-flex flex-row justify-content-center align-items-center mt-3">
        <div class="line"></div>
            <i class="fas fa-book-open" style="color: #fff"></i>
        <div class="line2"></div>
    </div>
    <div class="d-flex flex-row align-items-center banner-slug">
        {!! Theme::partial('breadcrumbs') !!}
    </div>
</div>
<section class="section-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="gioi-thieu-content-1">
                        <h3 class="post__title text-roboto-medium font-size-24">
                            {{ $post->name }}
                        </h3>
                        <div class="post__author d-flex flex-row">
                            @if ($post->author->username)
                                <h    /* height: 680px;5 class=" text-roboto-medium-black font-size-18">
                                    {{$post->author->getFullName()}}
                                </h5>
                            @endif
                            <span class="time-view d-flex flex-row align-items-center ml-3">
                                <i class="far fa-calendar-alt"style="color: #666666; width: 17px; height: 16px"></i>
                                <span class="ml-2">{{ $post->created_at->format('d/m/Y - H:i:s') }}</span>
                            </span>
                        </div>
                        <div class="post__thumbnail">
                            <img class="img-fluid" src="{{ RvMedia::getImageUrl($post->image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}">
                        </div>
                        @if($post->description)
                            <div class="post__description">
                                {{ $post->description }}
                            </div>
                        @endif
                        <div class="post__content">
                            {!! clean($post->content) !!}
                        </div>
                    </div>
                </div>
                {!! do_shortcode('[upcoming-events title="Sự kiện sắp diễn ra" category="'. theme_option('id_upcoming_event', 1) .'"][/upcoming-events]') !!}
            </div>

            <div class="col-lg-3 position-relative">
                <div class="d-flex flex-column justify-content-center">
                    {!! dynamic_sidebar('ads_post_sidebar') !!}
                </div>
            </div>
        </div>
    </div>
</section>
