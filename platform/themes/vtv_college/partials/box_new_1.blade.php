<section class="section-home">
    <div class="title text-center">
        <h3>{{ $title }}</h3>
        <div class="d-flex flex-row justify-content-center align-items-center mt-3">
            <div class="line"></div>
            <i class="fas fa-book-open" style="color: #9a0000"></i>
            <div class="line2"></div>
        </div>
    </div>
    <div class="container">
        @foreach ($featured as $featureItem)
            @if($loop->first)
                <div class="block-one row shadow-sm bg-white">
                    <div class="d-flex col-lg-6 align-items-center justify-content-center p-lg-2 p-xl-0">
                        <div class="w-100 h-100">
                            <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">
                                <img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}"
                                     alt="{{ $featureItem->name }}" class="img-resize img-shadow-right" title="{{ $featureItem->name }}"/>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-6 w-100 justify-content-center align-items-center">
                        <div class="news-text-title">
                            <h3 class="post__title">
                                <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">{{ $featureItem->name }}</a>
                            </h3>
                        </div>
                        <div class="time-view d-flex flex-row align-items-center">
                            <i class="far fa-calendar-alt" style="color: #666666; width: 17px; height: 16px" ></i>
                            <span class="ml-2">{{ $featureItem->created_at->format('d/m/Y - H:i:s') }}</span>
                        </div>
                        <div class="news-content-text">
                            <span>
                              {!! $featureItem->description !!}
                            </span>
                        </div>
                    </div>
                </div>


                <div class="row">
                    @else
                        <div class="col-xl-3 p-0 col-lg-4 col-md-6 pr-2 flex-column item-new-ps">
                            <div class="bg-img h-100">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">
                                        <img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}"
                                             alt="{{ $featureItem->name }}" class="img-resize img-shadow-top" title="{{ $featureItem->name }}"/>
                                    </a>
                                </div>
                                <div class="time-item-ps d-flex flex-row align-items-center">
                                    <i class="far fa-calendar-alt" style="color: #666666; width: 17px; height: 16px" ></i>
                                    <span class="ml-2">{{ $featureItem->created_at->format('d/m/Y - H:i:s') }}</span>
                                </div>
                                <div class="content-new-item">
                                    <h3 class="post__title">
                                        <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">{{ $featureItem->name }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @if ($loop->last)
                </div>
            @endif
            @endif
        @endforeach
    </div>
</section>
