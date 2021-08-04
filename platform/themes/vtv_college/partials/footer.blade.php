<footer>
    <div class="footer">
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
    if (window.innerWidth < 768) {
        var phantuchon = $(".item-menu-mobile");

        function before_jquery() {
            phantuchon.append("<i></i>");
        }
        before_jquery();
        function add_class_i() {
            $(".item-menu-mobile>i").addClass("pl-2 fa fa-angle-down");
        }
        add_class_i();
        function hiddenCate(ul, icon) {
            if (ul.is(":hidden") === true) {
                icon.toggleClass("up");
                ul.slideDown(200);
            } else {
                icon.toggleClass("up");
                ul.slideUp();
                ul.find("ul").slideUp(200);
            }
        }
        $("ul.sidenav-menu-mobile li").click(function (event) {
            var ul = $(this).children("ul");
            var icon = $(this).children("svg");
            hiddenCate(ul, icon);
        });
    }
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.height = "350px";
        document.getElementById("mySidenav").style.marginTop = "50px";
        document.getElementsByClassName("ic-open-menu")[0].style.display =
            "none";
        document.getElementsByClassName("ic-close-menu")[0].style.display =
            "block";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.height = "0";
        document.getElementsByClassName("ic-open-menu")[0].style.display =
            "block";
        document.getElementsByClassName("ic-close-menu")[0].style.display =
            "none";
    }
</script>
<script>
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
</script>
<script>
    document.getElementById("defaultOpen").click();

    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<script>
    //Get the button
    var mybutton = document.getElementById("btn-up-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 200 ||
            document.documentElement.scrollTop > 200
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script>
    const slider = document.querySelector(".block-column");
    let mouseDown = false;
    let startX, scrollLeft;

    let startDragging = function (e) {
        mouseDown = true;
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    };
    let stopDragging = function (event) {
        mouseDown = false;
    };

    slider.addEventListener("mousemove", (e) => {
        e.preventDefault();
        if (!mouseDown) {
            return;
        }
        const x = e.pageX - slider.offsetLeft;
        const scroll = x - startX;
        slider.scrollLeft = scrollLeft - scroll;
    });

    // Add the event listeners
    slider.addEventListener("mousedown", startDragging, false);
    slider.addEventListener("mouseup", stopDragging, false);
    slider.addEventListener("mouseleave", stopDragging, false);
</script>
<script>
    $(".responsive").slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        // autoplay: true,
        autoplaySpeed: 2000,
        prevArrow:
            '<div class="bg-prev-slick" onclick="onPrev()"><i class="fas fa-chevron-left" style="color: #fff"></i></div>',
        nextArrow:
            '<div class="bg-next-slick" onclick="onNext()"><i class="fas fa-chevron-right" style="color: #fff"></i></div>',
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
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
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
<script>
    $(".center").slick({
        centerMode: true,
        centerPadding: "60px",
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
        ],
    });
</script>
</body>
</html>
