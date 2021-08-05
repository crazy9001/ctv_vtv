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
                    <div class="img-size-1 card-image">
                        <a href="{{ $featureItem->url }}">
                            <img class="img-resize img-border-radius-top" src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="Third slide"/>
                        </a>
                    </div>
                    <div class="m-3">
                        <div class=" time-item-ps-tuyen-sinh d-flex flex-row align-items-center">
                            <i class="far fa-calendar-alt" style="color: #666666; width: 17px; height: 16px"></i>
                            <span class="ml-2">{{ $featureItem->created_at->format('d/m/Y - H:i:s') }}</span>
                        </div>
                        <div class="title-tuyensinh">
                            <h3>
                                <a href="{{ $featureItem->url }}">{{ $featureItem->name }}</a>
                            </h3>
                        </div>
                        <div class="content-tuyensinh">
                            <span>{{ $featureItem->description }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                @else
                <div class="tuyensinh-item row mb-4 mr-0 ml-0">
                    <div class="col-sm-6 col-6 p-0 img-tuyensinh-item d-flex justify-content-center">
                        <div class="w-100 h-100 card-image">
                            <a href="{{ $featureItem->url }}">
                                <img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}" class="img-resize img-border-radius-left"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 mt-4 d-flex flex-column">
                        <div class="time-item-ps m-0 d-flex flex-row align-items-center">
                            <i class="far fa-calendar-alt" style="color: #666666; width: 17px; height: 16px"></i>
                            <span class="ml-2">{{ $featureItem->created_at->format('d/m/Y - H:i:s') }}</span>
                        </div>
                        <div class="content-item-tuyensinh">
                        <span>
                            <a href="{{ $featureItem->url }}">{{ $featureItem->name }}</a>
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






