<section class="section-tuyen-sinh">
    <div class="container">
        <h3 class="admissions-title text-center">{{ $title }}</h3>
        <div class="d-flex mt-2 flex-row justify-content-center align-items-center">
            <div class="line"></div>
            <i class="fas fa-book-open" style="color: #9a0000"></i>
            <div class="line2"></div>
        </div>

        @foreach ($featured as $featureItem)
            @if($loop->first)
            <div class="row mt-3 bg-shadow">
                <div class="col-lg-6 d-flex justify-content-center">
                    <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">
                        <img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}" class="img-fluid" alt="{{ $featureItem->name }}" title="{{ $featureItem->name }}"/>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="mt-4">
                        <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">
                            <h3 class="text-roboto-medium font-size-24 text-color-07356A">{{ $featureItem->name }}</h3>
                        </a>
                        <h4 class="text-roboto font-size-14 mt-3">{{ $featureItem->created_at->format('d/m/Y - H:i:s') }}</h4>
                        <h5 class="text-roboto font-size-16 mt-3">{{ $featureItem->description }}</h5>
                        <button class="btn-detail-info mt-4 mb-3">
                            <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">Chi tiết</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                @else
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                        <div class="info-item d-flex flex-column justify-content-center">
                            <div class="card-image-event w-100 h-100">
                                <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">
                                    <img src="{{ RvMedia::getImageUrl($featureItem->image, 'medium', false, RvMedia::getDefaultImage()) }}" class="img-resize img-shadow-top"/>
                                </a>
                            </div>
                            <div class="p-3">
                                <a href="{{ $featureItem->url }}" title="{{ $featureItem->name }}">
                                    <h3 class="text-roboto-medium font-size-18 text-color-464646">{{ $featureItem->name }}</h3>
                                </a>
                                <h4 class="text-roboto font-size-14 mt-2">{{ $featureItem->created_at->format('d/m/Y - H:i:s') }}</h4>
                                <div class="text-content mt-2">
                                    <h3 class="text-roboto font-size-14">{{  Str::limit($featureItem->description, 255) }}</h3>
                                </div>
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
