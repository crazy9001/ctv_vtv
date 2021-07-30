{{--@php Theme::set('section-name', __('Search result for: ') . ' "' . Request::input('q') . '"') @endphp--}}
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
{{--        {!! $posts->withQueryString()->links() !!}--}}
{{--    </div>--}}
{{--@else--}}
{{--    <div class="alert alert-warning">--}}
{{--        <p>{{ __('There is no data to display!') }}</p>--}}
{{--    </div>--}}
{{--@endif--}}

@php Theme::set('section-name', __('Search result for: ') . ' "' . Request::input('q') . '"') @endphp
<div class="breadcrumbs">
    <div class="breadcrumbs__search d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class=" breadcrumbs__search--content d-flex flex-row justify-content-start">
                        <h3>Kết quả tìm kiếm cho: </h3>
                        <span>{{ Request::input('q') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="mt-4">
    <div class="container">
        <div class="input__search">
            <div class="d-flex flex-row">
                <form class="d-flex flex-row w-100" action="{{ route('public.search') }}">
                    <input type="text" name="q" placeholder="{{ __('Type to search...') }}" />
                    <button type="submit" class="p-3">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="mt-4 mb-4">
    <div class="container result">
        <h3>{{ $posts->count() }} kết quả tìm kiếm cho "{{ Request::input('q') }}"</h3>
        @if ($posts->count() > 0)
            @foreach ($posts as $post)
                <div class="mt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="w-100 h-100">
                                <a href="{{ $post->url }}" title="{{ $post->name }}">
                                    <img title="{{ $post->name }}" class="img-resize" src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="result__content d-flex flex-column">
                                <h3 class="post__title"><a title="{{ $post->name }}" href="{{ $post->url }}">{{ $post->name }}</a></h3>
                                <div class="time-view d-flex flex-row align-items-center">
                                    <i class="far fa-calendar-alt" style="color: #666666; width: 17px; height: 16px"></i>
                                    <span class="ml-2">{{ $post->created_at->format('d/m/Y - H:i:s') }}</span>
                                </div>
                                <h4>{{ $post->description }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>

