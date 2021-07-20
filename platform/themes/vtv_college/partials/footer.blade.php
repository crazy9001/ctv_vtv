<footer>
    <div class="footer">
        @if (is_plugin_active('newsletter'))
        <div class="bg-footer1">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 d-flex justify-content-center">
                        <div class="row d-flex align-items-center">
                            <img src="{{ Theme::asset()->url('images/email.png') }}" class="img-fluid"/>
                            <h3>Đăng ký email nhận thông báo mới nhất từ CTV</h3>
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex justify-content-center">
                        <div class="row">
                            <form class="form-inline" action="{{ route('public.newsletter.subscribe') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input
                                        type="email"
                                        id="newsletter_email"
                                        class="form-control"
                                        name="email"
                                        aria-describedby="emailHelp"
                                        placeholder="{{ __('Your email') }}"
                                    />
                                </div>
                                @if (setting('enable_captcha') && is_plugin_active('captcha'))
                                    {!! Captcha::display() !!}
                                @endif
                                <button class="row view-button" type="submit">
                                    <i class="fas fa-paper-plane" style="color: #fff"></i>
                                    <div class="button-register">Đăng ký</div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="bg-footer2 d-flex align-items-center">
            <div class="container row h-100 d-flex align-items-center">
                <div class="col-md-4">
                    @if (theme_option('logo'))
                        <div class="footer-img-logo">
                            <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" class="img-fluid" alt="{{ theme_option('site_title') }}">
                        </div>
                    @endif
                    <h3>TRƯỜNG CAO ĐẲNG TRUYỀN HÌNH - ĐÀI TRUYỀN HÌNH VIỆT NAM</h3>
                    <h5>
                        {!! dynamic_sidebar('footer_sidebar') !!}
                    </h5>
                </div>
                <div class=" col-md-4 block-col-md col-item-2 d-flex flex-column align">
                    <div class="d-inline">
                        <div class="footer-img-logo"></div>
                        <h3>Liên hệ</h3>
                        <div class="d-flex flex-row align-items-center">
                            <i style="color: #fff" class="fas fa-map-marker-alt"></i>
                            <strong>{{ theme_option('address') }}</strong>
                        </div>
                        <div class="d-flex flex-row align-items-center text">
                            <i style="color: #fff" class="fas fa-phone-alt"></i>
                            <strong>{{ theme_option('phone_number') }}</strong>
                        </div>
                        <div class="d-flex flex-row align-items-center text">
                            <i style="color: #fff" class="fas fa-at"></i>
                            <strong><a href="mailto:{{ theme_option('contact_email') }}">{{ theme_option('contact_email') }}</a></strong>
                        </div>
                        <div class="d-flex flex-row align-items-center text">
                            <i style="color: #fff" class="fas fa-globe-europe"></i>
                            <strong>{{ theme_option('website') }}</strong>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 block-col-md-2 col-item-2 d-flex flex-column align-items-end">
                    <div class="footer-img-logo"></div>
                    <div class="d-inline">
                        <h3>facebook</h3>
                        <div class="d-flex flex-row">
                            <img src="{{ Theme::asset()->url('images/footer-qc.png') }}" class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-footer2-bottom d-flex align-items-center justify-content-center">
                <div class="container row">
                    <div class="col-lg-6 text">
                        {!! clean(theme_option('copyright')) !!}
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end"></div>
                </div>
                <!-- <div class="div-button"></div> -->
            </div>
        </div>
    </div>
</footer>
{!! Theme::footer() !!}
<script>
    $(".responsive").slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });
</script>
</body>
</html>
