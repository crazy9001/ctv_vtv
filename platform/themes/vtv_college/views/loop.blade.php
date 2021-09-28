@php
    $featured = get_featured_posts(5, [
        'author',
        'categories' => function ($query) { $query->limit(1); },
    ]);
@endphp
<div class="bg-banner-gioithieu d-flex flex-column justify-content-center align-items-center ">
    <h3>{{ __('News & Events') }}</h3>
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
                    @foreach ($featured as $index => $featureItem)
                        @if($loop->first)
                            <div class="col-lg-8 news-content-container">
                                <div class="post_featured_item">
                                    <a href="{{ $featureItem->url }}">
                                        <img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}" class="img-fluid" alt="{{ $featureItem->name }}" title="{{ $featureItem->name }}"/>
                                    </a>
                                    <div class="news-event-content">
                                        <h3>
                                            <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">{{ $featureItem->name }}</a>
                                        </h3>
                                        <div class="time-view d-flex flex-row align-items-center">
                                            <i class="far fa-calendar-alt" style="color: #666666; width: 17px; height: 16px"></i>
                                            <span class="ml-2">{{ $featureItem->created_at->format('d/m/Y - H:i:s') }}</span>
                                        </div>
                                        <div>
                                            <h5>{{ $featureItem->description }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 list-news-event">
                                @else
                                    <div class="pt-3 pb-3">
                                        @if($index == 1)
                                            <img
                                                src="{{ RvMedia::getImageUrl($featureItem->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                                class="img-fluid"
                                            />
                                            <div class="time-view d-flex flex-row align-items-center">
                                                <i class="far fa-calendar-alt" style="color: #666666; width: 17px; height: 16px"></i>
                                                <span class="ml-2">{{ $featureItem->created_at->format('d/m/Y - H:i:s') }}</span>
                                            </div>
                                        @endif
                                        <div class="border-bottom pb-3">
                                            <h5 class="rules font-size-18">
                                                <a href="{{ $featureItem->url }}">{{ $featureItem->name }}</a>
                                            </h5>
                                            @if($index == 1)
                                                <h6>{{ $featureItem->description }}</h6>
                                            @endif
                                        </div>
                                    </div>
                                    @if ($loop->last)
                            </div>
                        @endif
                        @endif
                    @endforeach
                </div>
                <div class="mt-3 mb-3">
                    {!! do_shortcode('[upcoming-events title="'.__('Upcoming events').'" category="'. theme_option('id_upcoming_event', 1) .'"][/upcoming-events]') !!}
                    <section class="section-banner">
                        <div class="row row ml-0 mr-0">
                            <div class="introduce-content">
                                <div class="section-banner">
                                    <div class="row">
                                        <div class="col-lg-8 introduce-item">
                                            <div id="posts">
                                                @foreach($posts as $post)
                                                    <div class="post__introduce_item">
                                                        <h3><a href="{{ $post->url }}" title="{{ $post->name }}">{{ $post->name }}</a></h3>
                                                        <div class="row mt-3 bg-content-item">
                                                            <div class="col-lg-4">
                                                                <a href="{{ $post->url }}">
                                                                    <img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}"/>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="time-view d-flex flex-row align-items-center">
                                                                    <i class="far fa-calendar-alt" style=" color: #666666; width: 17px;height: 16px;"></i>
                                                                    <span class="ml-2">{{ $post->created_at->format('d/m/Y - H:i:s') }}</span>
                                                                </div>
                                                                <h5>
                                                                    <a href="{{ $post->url }}">{{ $post->description }}</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
{{--                                            <button class="see-more mt-4 button-add" data-page="2" data-link="{{$category->url}}?page=" data-div="#posts">{{__('See more')}}</button>--}}
                                        </div>
                                        <div class="col-lg-4 item-right-1">
                                            {!! dynamic_sidebar('posts_sidebar') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-lg-3 blue">
                <div class="sticky d-flex flex-column justify-content-center align-items-center">
                    {!! dynamic_sidebar('ads_posts_sidebar') !!}
                </div>
            </div>
        </div>
    </div>
</section>
