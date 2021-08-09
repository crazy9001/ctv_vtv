<section class="section-tuyen-sinh">
    <div class="container">
        <h3 class="admissions-title text-center">{{ $title }}</h3>
        <div class="d-flex mt-2 flex-row justify-content-center align-items-center">
            <div class="line"></div>
            <svg class="svg-inline--fa fa-book-open fa-w-18" style="color: #9a0000;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M542.22 32.05c-54.8 3.11-163.72 14.43-230.96 55.59-4.64 2.84-7.27 7.89-7.27 13.17v363.87c0 11.55 12.63 18.85 23.28 13.49 69.18-34.82 169.23-44.32 218.7-46.92 16.89-.89 30.02-14.43 30.02-30.66V62.75c.01-17.71-15.35-31.74-33.77-30.7zM264.73 87.64C197.5 46.48 88.58 35.17 33.78 32.05 15.36 31.01 0 45.04 0 62.75V400.6c0 16.24 13.13 29.78 30.02 30.66 49.49 2.6 149.59 12.11 218.77 46.95 10.62 5.35 23.21-1.94 23.21-13.46V100.63c0-5.29-2.62-10.14-7.27-12.99z"></path></svg><!-- <i class="fas fa-book-open" style="color: #9a0000"></i> Font Awesome fontawesome.com -->
            <div class="line2"></div>
        </div>
        @foreach ($featured as $featureItem)
            @if($loop->first)
            <div class="row mt-3 bg-shadow">
                <div class="col-lg-6 d-flex justify-content-center pr-0 pl-0">
                    <a href="{{ $featureItem->url }}">
                        <img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}" class="img-fluid img-shadow-right">
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="mt-4">
                        <h3 class="text-roboto-medium font-size-24 text-color-07356A">
                            <a href="{{ $featureItem->url }}">
                                {{ $featureItem->name }}
                            </a>
                        </h3>
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
                    <div class="info-item d-flex flex-column">
                        <div class="card-image-event w-100 h-100">
                            <a href="{{ $featureItem->url }}">
                                <img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}" class="img-resize img-shadow-top">
                            </a>
                        </div>
                        <div class="p-3">
                            <h3 class="text-roboto-medium font-size-18 text-color-464646">{{ $featureItem->name }}</h3>
                            <h4 class="text-roboto font-size-14 mt-2">{{ $featureItem->created_at->format('d/m/Y - H:i:s') }}</h4>
                            <div class="text-content mt-2">
                                <h3 class="text-roboto font-size-14">{{ $featureItem->description }}</h3>
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
