{{--@php Theme::set('section-name', $tag->name) @endphp--}}

{{--@if ($posts->count() > 0)--}}
{{--    @foreach ($posts as $post)--}}
{{--        <article class="post post__horizontal mb-40 clearfix">--}}
{{--            <div class="post__thumbnail">--}}
{{--                <img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}"><a href="{{ $post->url }}" class="post__overlay"></a>--}}
{{--            </div>--}}
{{--            <div class="post__content-wrap">--}}
{{--                <header class="post__header">--}}
{{--                    <h3 class="post__title"><a href="{{ $post->url }}">{{ $post->name }}</a></h3>--}}
{{--                    <div class="post__meta"><span class="post__created-at"><i class="ion-clock"></i>{{ $post->created_at->format('M d, Y') }}</span>--}}
{{--                        @if ($post->author->username)--}}
{{--                            <span class="post__author"><i class="ion-android-person"></i><span>{{ $post->author->getFullName() }}</span></span>--}}
{{--                        @endif--}}
{{--                        <span class="post-category"><i class="ion-cube"></i>--}}
{{--                            @if ($post->categories->first())--}}
{{--                                <a href="{{ $post->categories->first()->url }}">{{ $post->categories->first()->name }}</a>--}}
{{--                            @endif--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </header>--}}
{{--                <div class="post__content">--}}
{{--                    <p data-number-line="4">{{ $post->description }}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}
{{--    <div class="page-pagination text-right">--}}
{{--        {!! $posts->links() !!}--}}
{{--    </div>--}}
{{--@else--}}
{{--    <div class="alert alert-warning">--}}
{{--        <p>{{ __('There is no data to display!') }}</p>--}}
{{--    </div>--}}
{{--@endif--}}


<div class="container" style="margin-top: 0">
    <div class="row">
        <div class="gioi-thieu-content-1">
            <div class="section-banner">
                <div class="row">
                    <div class="col-lg-8 gioi-thieu-item-1">
                        @if ($posts->count() > 0)
                            @foreach ($posts as $index => $post)
                                <div class="category__post_item">
                                    <h3>
                                        <a href="{{ $post->url }}" title="{{ $post->name }}">{{ $post->name }}</a>
                                    </h3>
                                    <div class="row mt-3 bg-content-item">
                                        <div class="col-lg-4">
                                            <a href="{{ $post->url }}">
                                                <img
                                                    src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                                    title="{{ $post->name }}" class="img-fluid"/>
                                            </a>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="time-view d-flex flex-row align-items-center">
                                                <i class="far fa-calendar-alt" style="color: #666666; width: 17px; height: 16px;"></i>
                                                <span class="ml-2">{{ $post->created_at->format('d/m/Y - H:i:s') }}</span>
                                            </div>
                                            <div class="post__description_in_category_2">
                                                {{ $post->description }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <button class="mt-4 button-add">Xem thêm</button>
                    </div>

                    <div class="col-lg-4 item-right-1">
                        {!! dynamic_sidebar('tag_sidebar') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
