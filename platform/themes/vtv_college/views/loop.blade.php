<div class="bg-banner-gioithieu d-flex flex-column justify-content-center align-items-center ">
    <h3>Tin tức & Sự kiện</h3>
    <div class="d-flex flex-row justify-content-center align-items-center mt-3">
        <div class="line"></div>
        <i class="fas fa-book-open" style="color: #fff"></i>
        <div class="line2"></div>
    </div>
    <div class="d-flex flex-row align-items-center banner-slug">
        {!! Theme::partial('breadcrumbs') !!}
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="mt-3 mb-3">
                <section class="section-banner">
                    <div class="container">
                        <div class="row">
                            <div class="introduce-content">
                                <div class="section-banner">
                                    <div class="row">
                                        <div class="col-lg-8 introduce-item">
                                            @foreach($posts as $post)
                                                <div class="post__introduce_item">
                                                    <h3><a href="{{ $post->url }}" title="{{ $post->name }}">{{ $post->name }}</a></h3>
                                                    <div class="row mt-3 bg-content-item">
                                                        <div class="col-lg-4">
                                                            <a href="{{ $post->url }}">
                                                                <img src="{{ RvMedia::getImageUrl($post->image, 'featured', false, RvMedia::getDefaultImage()) }}"/>
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
{{--                                            {{ $posts->links() }}--}}
                                        </div>
                                        <div class="col-lg-4 item-right-1">
                                            {!! dynamic_sidebar('category_sidebar') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="d-flex flex-column justify-content-center align-items-center">
                {!! dynamic_sidebar('ads_category_sidebar') !!}
            </div>
        </div>
    </div>
</div>
