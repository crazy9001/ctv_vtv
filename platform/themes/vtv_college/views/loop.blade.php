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

<section class="section-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="gioi-thieu-content-1">
                        <div class="row">
                            <div class="col-lg-8 gioi-thieu-item-1">
                                <div class="scrolling-pagination">
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
                                </div>
{{--                                <button class="mt-4 button-add">Xem thêm</button>--}}
                                {{ $posts->links() }}
                            </div>
                            <div class="col-lg-4 item-right-1">
                                {!! dynamic_sidebar('category_sidebar') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 position-relative">
                <div class="d-flex flex-column justify-content-center">
                    {!! dynamic_sidebar('ads_category_sidebar') !!}
                </div>
            </div>
        </div>
    </div>
</section>
