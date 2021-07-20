<section class="section-home">
    <div class="title text-center">
        <h3>{{ $title }}</h3>
        <div class="d-flex flex-row justify-content-center align-items-center mt-3">
            <div class="line"></div>
            <i class="fas fa-book-open" style="color: #9a0000"></i>
            <div class="line2"></div>
        </div>
    </div>
    <div class="container tuyensinh">
        <div class="row">
            @foreach ($featured as $featureItem)
                @if($loop->first)
                <div class="col-lg-6">
                    <div class="bg-tuyesinh d-flex flex-column">
                        <a href="{{ $featureItem->url }}">
                            <img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}"
                                 alt="{{ $featureItem->name }}" class="img-resize img-border-radius-top" title="{{ $featureItem->name }}"/>
                        </a>
                        <div class="m-3">
                            <div class="time-item-ps-tuyen-sinh d-flex flex-row align-items-center">
                                <i class="far fa-calendar-alt" style="color: #666666; width: 17px; height: 16px"></i>
                                <span class="ml-2">{{ $featureItem->created_at->format('d/m/Y - H:i:s') }}</span>
                            </div>
                            <div class="title-tuyensinh">
                                <h3 class="post__title">
                                    <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">{{ $featureItem->name }}</a>
                                </h3>
                            </div>
                            <div class="content-tuyensinh">
                                <span>
                                   {!! $featureItem->description !!}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @else
                        <div class="tuyensinh-item row mb-4">
                        <div class="col-sm-6 p-0 img-tuyensinh-item d-flex justify-content-center">
                            <a href="{{ $featureItem->url }}">
                                <img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}"
                                     alt="{{ $featureItem->name }}" class="img-resize img-border-radius-left" title="{{ $featureItem->name }}"/>
                            </a>
                        </div>
                        <div class="col-sm-6 d-flex flex-column">
                            <div class="time-item-ps d-flex flex-row align-items-center">
                                <i class="far fa-calendar-alt"style="color: #666666; width: 17px; height: 16px"></i>
                                <span class="ml-2">{{ $featureItem->created_at->format('d/m/Y - H:i:s') }}</span>
                            </div>
                            <div class="content-item-tuyensinh">
                                <span>
                                    <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">{{ $featureItem->name }}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    @if ($loop->last)
                </div>
                @endif
                @endif
            @endforeach
        </div>
    </div>
</section>





