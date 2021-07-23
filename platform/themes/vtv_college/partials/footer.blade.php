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
    function openSearch() {
        document.getElementById("header-search").style.height = "60px";
        setTimeout(() => {
            document.getElementById("inputSearch").style.display = "block";
            document.getElementById("closeSearch").style.display = "flex";
        }, [500]);
    }

    function closeSearch() {
        document.getElementById("header-search").style.height = "0px";
        document.getElementById("inputSearch").style.display = "none";
        document.getElementById("closeSearch").style.display = "none";
    }

    // $(window).load(function () {
    //     $("section img").click(function () {
    //         $(".lightbox").fadeIn(300);
    //         $(".lightbox").append(
    //             "<img src='" +
    //             $(this).attr("src") +
    //             "' alt='" +
    //             $(this).attr("alt") +
    //             "' />"
    //         );
    //         $(".filter").css(
    //             "background-image",
    //             "url(" + $(this).attr("src") + ")"
    //         );
    //         /$(".title").append("<h1>" + $(this).attr("alt") + "</h1>");/
    //         $("html").css("overflow", "hidden");
    //         if ($(this).is(":last-child")) {
    //             $(".arrowr").css("display", "none");
    //             $(".arrowl").css("display", "block");
    //         } else if ($(this).is(":first-child")) {
    //             $(".arrowr").css("display", "block");
    //             $(".arrowl").css("display", "none");
    //         } else {
    //             $(".arrowr").css("display", "block");
    //             $(".arrowl").css("display", "block");
    //         }
    //     });
    //
    //     $(".close").click(function () {
    //         $(".lightbox").fadeOut(300);
    //         $("h1").remove();
    //         $(".lightbox img").remove();
    //         $("html").css("overflow", "auto");
    //     });
    //
    //     $(document).keyup(function (e) {
    //         if (e.keyCode == 27) {
    //             $(".lightbox").fadeOut(300);
    //             $(".lightbox img").remove();
    //             $("html").css("overflow", "auto");
    //         }
    //     });
    //
    //     $(".arrowr").click(function () {
    //         var imgSrc = $(".lightbox img").attr("src");
    //         var search = $("section").find("img[src$='" + imgSrc + "']");
    //         var newImage = search.next().attr("src");
    //         $(".lightbox img").attr("src", search.next());
    //         $(".lightbox img").attr("src", newImage);
    //         $(".filter").css("background-image", "url(" + newImage + ")");
    //
    //         if (!search.next().is(":last-child")) {
    //             $(".arrowl").css("display", "block");
    //         } else {
    //             $(".arrowr").css("display", "none");
    //         }
    //     });
    //
    //     $(".arrowl").click(function () {
    //         var imgSrc = $(".lightbox img").attr("src");
    //         var search = $("section").find("img[src$='" + imgSrc + "']");
    //         var newImage = search.prev().attr("src");
    //         /$(".lightbox img").attr("src", search.next());/
    //         $(".lightbox img").attr("src", newImage);
    //         $(".filter").css("background-image", "url(" + newImage + ")");
    //
    //         if (!search.prev().is(":first-child")) {
    //             $(".arrowr").css("display", "block");
    //         } else {
    //             $(".arrowl").css("display", "none");
    //         }
    //     });
    // });

</script>
</body>
</html>
