<html lang="{{ app()->getLocale() }}">
<head >
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tuyển sinh</title>

    {!! Theme::header() !!}

</head>
<body>
<header id="header">
    <div class="position-relative d-flex flex-column">
        <img
            src="{{ Theme::asset()->url('images/bg-header-landing-page.png') }}"
            class="img-bg-header img-bg"
        />
        <div class="d-flex w-100 justify-content-center">
            <button class="register-header">Đăng ký ngay</button>
        </div>
        <img
            src="{{ Theme::asset()->url('images/bg-header-landing-page-2.png') }}"
            class="landing-page-2"
        />
    </div>
    <div class="w-100 header-mobile">
        <div class="d-flex d-xl-none row m-0 justify-content-between">
            <div class="col-2 d-flex justify-content-center align-items-center">
                <i class="fas fa-bars" style="color: #fff"></i>
            </div>
            <div class="col-8 d-flex justify-content-center align-items-center">
                <img
                    src="{{ Theme::asset()->url('images/logo.png') }}"
                    width="108"
                    height="35"
                    class=""
                />
            </div>
            <div class="col-2"></div>
        </div>
        <div class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <div class="w-25">
                        <img src="{{ Theme::asset()->url('images/logo.png') }}" width="184" height="55"/>
                    </div>
                    <div
                        class="
                  w-75
                  d-flex
                  justify-content-between
                  align-items-end
                  item-header-text
                "
                    >
                        <a href="{{ route('public.single') }}">Trang chủ</a>
                        <a href="#">Vì sao chọn CTV</a>
                        <a href="#">Chuyên ngành đào tạo</a>
                        <a href="#">Thông tin tuyển sinh</a>
                        <a href="#">Cơ hội việc làm</a>
                        <a href="#">Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-header2 mt-5 w-100 flex-column justify-content-center d-none d-xl-flex">
        <div class="container-fluid header-container" style="z-index: 1">
            <h3 class="text-center">Lý do bạn nên chọn Cao đẳng truyền hình</h3>
            <div class=" mt-3 d-flex flex-row justify-content-center align-items-center">
                <div class="line bg-white"></div>
                <i class="fas fa-book-open" style="color: #fff"></i>
                <div class="line2 bg-white"></div>
            </div>
            <h5 class="text-center">
                Cao đẳng Truyền hình là đơn vị đào tạo báo chí, truyền thông chuyên
                nghiệp của đài Truyền hình Việt Nam. Từ năm 1956 đến nay, trường là
                nơi trưởng thành của hàng ngàn phóng viên, biên tập viên, quay phim,
                kỹ thuật viên ... đang làm việc tại các cơ quan thông tấn, báo chí,
                phát thanh, truyền hình và công ty truyền thông trên cả nước
            </h5>
            <div class="row d-none d-lg-flex">
                <div class="col-xl-3 col-lg-4 mt-2">
                    <div class="d-flex flex-row align-items-center">
                        <img
                            src="{{ Theme::asset()->url('images/ic-tuyen-sinh-1.png') }}"
                            width="70"
                            height="70"
                        />
                        <div class="d-flex flex-column justify-content-end">
                            <h4 class="title-content-header">5</h4>
                            <h5 class="content-header-text">Chất lượng đào tạo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-2">
                    <div class="d-flex flex-row align-items-center">
                        <img
                            src="{{ Theme::asset()->url('images/ic-tuyen-sinh-2.png') }}"
                            width="70"
                            height="70"
                        />
                        <div class="d-flex flex-column">
                            <h4 class="title-content-header">92%</h4>
                            <h5 class="content-header-text">Sinh viên có việc làm</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-2">
                    <div class="d-flex flex-row align-items-center">
                        <img
                            src="{{ Theme::asset()->url('images/ic-tuyen-sinh-3.png') }}"
                            width="70"
                            height="70"
                        />
                        <div class="d-flex flex-column">
                            <h4 class="title-content-header">24.239</h4>
                            <h5 class="content-header-text">Phản hồi tích cực</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-2">
                    <div class="d-flex flex-row align-items-center">
                        <img
                            src="{{ Theme::asset()->url('images/ic-tuyen-sinh-4.png') }}"
                            width="70"
                            height="70"
                        />
                        <div class="d-flex flex-column">
                            <span class="text-Lato-Bold ml-3 font-size-18">15</span>
                            <span class="text-lato-italic ml-3 font-size-14"
                            >Giải thưởng lớn</span
                            >
                            <h4 class="title-content-header">24.239</h4>
                            <h5 class="content-header-text">Phản hồi tích cực</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-2">
                    <div class="d-flex flex-row align-items-center">
                        <img
                            src="{{ Theme::asset()->url('images/ic-tuyen-sinh-5.png') }}"
                            width="70"
                            height="70"
                        />
                        <div class="d-flex flex-column">
                            <h4 class="title-content-header">2 Năm</h4>
                            <h5 class="content-header-text">Thời gian học tập</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-2">
                    <div class="d-flex flex-row align-items-center">
                        <img
                            src="{{ Theme::asset()->url('images/ic-tuyen-sinh-6.png') }}"
                            width="70"
                            height="70"
                        />
                        <div class="d-flex flex-column">
                            <h4 class="title-content-header">Doanh nghiệp</h4>
                            <h5 class="content-header-text">Doanh nghiệp</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-2">
                    <div class="d-flex flex-row align-items-center">
                        <img
                            src="{{ Theme::asset()->url('images/ic-tuyen-sinh-7.png') }}"
                            width="70"
                            height="70"
                        />
                        <div class="d-flex flex-column">
                            <h4 class="title-content-header">Nhà nước</h4>
                            <h5 class="content-header-text">Học phí</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-2">
                    <div class="d-flex flex-row align-items-center">
                        <img
                            src="{{ Theme::asset()->url('images/ic-tuyen-sinh-8.png') }}"
                            width="40"
                            height="40"
                        />
                        <div class="d-flex flex-column">
                            <h4 class="title-content-header">Từ VTV</h4>
                                <h5 class="content-header-text">Đội ngũ giảng viên</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
