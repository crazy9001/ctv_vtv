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
                    <h3>{{ theme_option('site_title') }} - ĐÀI TRUYỀN HÌNH VIỆT NAM</h3>
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
{{--                            <img src="{{ Theme::asset()->url('images/footer-qc.png') }}" class="img-fluid"/>--}}
                            @if (theme_option('facebook_comment_enabled_in_post', 'yes') == 'yes' || (theme_option('facebook_chat_enabled', 'yes') == 'yes' && theme_option('facebook_page_id')))
                                <div id="fb-root"></div>
                                <script>
                                    window.fbAsyncInit = function() {
                                        FB.init({
                                            xfbml            : true,
                                            version          : 'v7.0'
                                        });
                                    };

                                    (function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>

                                @if (theme_option('facebook_page_id'))
{{--                                    <div class="fb-customerchat"--}}
{{--                                         attribution="install_email"--}}
{{--                                         page_id="{{ theme_option('facebook_page_id') }}"--}}
{{--                                         theme_color="{{ theme_option('primary_color', '#ff2b4a') }}">--}}
{{--                                    </div>--}}

                                    <div class="fb-page"
                                         data-href="https://www.facebook.com/{{ theme_option('facebook_page_id') }}"
                                         data-width="272"
                                         data-hide-cover="false"
                                         data-show-facepile="false"></div>
                                @endif
                            @endif
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
<script type="text/javascript">
    $(document).ready(function () {
        // Hide SubMenus.
        $(".subMenu").hide();

        // Shows SubMenu when it's parent is hovered.
        $(".subMenu")
            .parent("li")
            .hover(function () {
                $(this).find(">.subMenu").not(":animated").slideDown(300);
                $(this).toggleClass("active ");
            });

        // Hides SubMenu when mouse leaves the zone.
        $(".subMenu")
            .parent("li")
            .mouseleave(function () {
                $(this).find(">.subMenu").slideUp(150);
            });

        // Prevents scroll to top when clicking on <a href="#">
        $('a[href="#"]').click(function () {
            return false;
        });
    });
</script>
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

    $(document).ready(function () {
        var stickyTop = $(".sticky").offset().top;

        $(window).scroll(function () {
            var windowTop = $(window).scrollTop();
            if (
                stickyTop < windowTop &&
                $(".blue").height() +
                $(".blue").offset().top -
                $(".sticky").height() >
                windowTop
            ) {
                $(".sticky").css("position", "sticky");
            } else {
                $(".sticky").css("top", "100px");
            }
        });
    });

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
<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "us";
                callback(countryCode);
            });
        },
        //utilsScript: "../../build/js/utils.js?1613236686837" // just for formatting/placeholders etc
    });
</script>
<script>
    var initPhotoSwipeFromDOM = function (gallerySelector) {
        // parse slide data (url, title, size ...) from DOM elements
        // (children of gallerySelector)
        var parseThumbnailElements = function (el) {
            var thumbElements = el.childNodes,
                numNodes = thumbElements.length,
                items = [],
                figureEl,
                linkEl,
                size,
                item;

            for (var i = 0; i < numNodes; i++) {
                figureEl = thumbElements[i]; // <figure> element

                // include only element nodes
                if (figureEl.nodeType !== 1) {
                    continue;
                }

                linkEl = figureEl.children[0]; // <a> element

                size = linkEl.getAttribute("data-size").split("x");

                // create slide object
                item = {
                    src: linkEl.getAttribute("href"),
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10),
                };

                if (figureEl.children.length > 1) {
                    // <figcaption> content
                    item.title = figureEl.children[1].innerHTML;
                }

                if (linkEl.children.length > 0) {
                    // <img> thumbnail element, retrieving thumbnail url
                    item.msrc = linkEl.children[0].getAttribute("src");
                }

                item.el = figureEl; // save link to element for getThumbBoundsFn
                items.push(item);
            }

            return items;
        };

        // find nearest parent element
        var closest = function closest(el, fn) {
            return el && (fn(el) ? el : closest(el.parentNode, fn));
        };

        // triggers when user clicks on thumbnail
        var onThumbnailsClick = function (e) {
            e = e || window.event;
            e.preventDefault ? e.preventDefault() : (e.returnValue = false);

            var eTarget = e.target || e.srcElement;

            // find root element of slide
            var clickedListItem = closest(eTarget, function (el) {
                return el.tagName && el.tagName.toUpperCase() === "FIGURE";
            });

            if (!clickedListItem) {
                return;
            }

            // find index of clicked item by looping through all child nodes
            // alternatively, you may define index via data- attribute
            var clickedGallery = clickedListItem.parentNode,
                childNodes = clickedListItem.parentNode.childNodes,
                numChildNodes = childNodes.length,
                nodeIndex = 0,
                index;

            for (var i = 0; i < numChildNodes; i++) {
                if (childNodes[i].nodeType !== 1) {
                    continue;
                }

                if (childNodes[i] === clickedListItem) {
                    index = nodeIndex;
                    break;
                }
                nodeIndex++;
            }

            if (index >= 0) {
                // open PhotoSwipe if valid index found
                openPhotoSwipe(index, clickedGallery);
            }
            return false;
        };

        // parse picture index and gallery index from URL (#&pid=1&gid=2)
        var photoswipeParseHash = function () {
            var hash = window.location.hash.substring(1),
                params = {};

            if (hash.length < 5) {
                return params;
            }

            var vars = hash.split("&");
            for (var i = 0; i < vars.length; i++) {
                if (!vars[i]) {
                    continue;
                }
                var pair = vars[i].split("=");
                if (pair.length < 2) {
                    continue;
                }
                params[pair[0]] = pair[1];
            }

            if (params.gid) {
                params.gid = parseInt(params.gid, 10);
            }

            return params;
        };

        var openPhotoSwipe = function (
            index,
            galleryElement,
            disableAnimation,
            fromURL
        ) {
            var pswpElement = document.querySelectorAll(".pswp")[0],
                gallery,
                options,
                items;

            items = parseThumbnailElements(galleryElement);

            // define options (if needed)
            options = {
                // define gallery index (for URL)
                galleryUID: galleryElement.getAttribute("data-pswp-uid"),

                getThumbBoundsFn: function (index) {
                    // See Options -> getThumbBoundsFn section of documentation for more info
                    var thumbnail = items[index].el.getElementsByTagName("img")[0], // find thumbnail
                        pageYScroll =
                            window.pageYOffset || document.documentElement.scrollTop,
                        rect = thumbnail.getBoundingClientRect();

                    return { x: rect.left, y: rect.top + pageYScroll, w: rect.width };
                },
            };

            // PhotoSwipe opened from URL
            if (fromURL) {
                if (options.galleryPIDs) {
                    // parse real index when custom PIDs are used
                    // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                    for (var j = 0; j < items.length; j++) {
                        if (items[j].pid == index) {
                            options.index = j;
                            break;
                        }
                    }
                } else {
                    // in URL indexes start from 1
                    options.index = parseInt(index, 10) - 1;
                }
            } else {
                options.index = parseInt(index, 10);
            }

            // exit if index not found
            if (isNaN(options.index)) {
                return;
            }

            if (disableAnimation) {
                options.showAnimationDuration = 0;
            }

            // Pass data to PhotoSwipe and initialize it
            gallery = new PhotoSwipe(
                pswpElement,
                PhotoSwipeUI_Default,
                items,
                options
            );
            gallery.init();
        };

        // loop through all gallery elements and bind events
        var galleryElements = document.querySelectorAll(gallerySelector);

        for (var i = 0, l = galleryElements.length; i < l; i++) {
            galleryElements[i].setAttribute("data-pswp-uid", i + 1);
            galleryElements[i].onclick = onThumbnailsClick;
        }

        // Parse URL and open gallery if it contains #&pid=3&gid=1
        var hashData = photoswipeParseHash();
        if (hashData.pid && hashData.gid) {
            openPhotoSwipe(
                hashData.pid,
                galleryElements[hashData.gid - 1],
                true,
                true
            );
        }
    };

    // execute above function
    initPhotoSwipeFromDOM(".my-gallery");
</script>
</body>
</html>
