<section class="section-home">
    <div class="daotao-view">
        <div class="datao-title">
            <h3>{{ $title }}</h3>
            <div class="d-flex justify-content-center text-center">
                <span>
                    Bạn yêu thích công việc Báo chí - Truyền hình & Truyền thông và
                    muốn trở thành Người dẫn chương trình truyền hình, Phát thanh
                    viên, Phóng viên, Biên tập viên làm việc trong các Đài Truyền
                    hình - Phát thanh - Tòa soạn báo
                </span>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                <div class="line"></div>
                <i class="fas fa-book-open" style="color: #fff"></i>
                <div class="line2"></div>
            </div>
        </div>
        <div class="container responsive autoplay mt-5" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
            @foreach ($featured as $featureItem)
                <div class="col-4 slick-images">
                    <div class="">
                        <a href="{{ $featureItem->url }}">
                            <img
                                src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}"
                                alt="{{ $featureItem->name }}" class="img-fluid img-border-radius"
                                title="{{ $featureItem->name }}"/>
                        </a>
                    </div>
                    <div class="content-daotao">
                        <h3>
                            <a href="{{ $featureItem->url }}"
                               title="{{ $featureItem->name }}">{{ $featureItem->name }}</a>
                        </h3>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>