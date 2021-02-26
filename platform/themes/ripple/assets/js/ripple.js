let searchInput = $('.search-input');
let superSearch = $('.super-search');
let closeSearch = $('.close-search');
let searchResult = $('.search-result');
let timeoutID = null;

export class Ripple {
    searchFunction(keyword) {
        clearTimeout(timeoutID);
        timeoutID = setTimeout(() => {
            superSearch.removeClass('search-finished');
            searchResult.fadeOut();
            $.ajax({
                type: 'GET',
                cache: false,
                url: superSearch.data('search-url'),
                data: {
                    'q': keyword
                },
                success: res => {
                    if (!res.error) {
                        searchResult.html(res.data.items);
                        superSearch.addClass('search-finished');
                    } else {
                        searchResult.html(res.message);
                    }
                    searchResult.fadeIn(500);
                },
                error: res => {
                    searchResult.html(res.responseText);
                    searchResult.fadeIn(500);
                }
            });
        }, 500);
    }

    initVideoPlayer() {

        let resizeVideoJs = function (player, aspectRatio) {
            // Get the parent element's actual width
            let width = document.getElementById(player.id).parentElement.offsetWidth;
            // Set width to fill parent element, Set height
            player.width(width).height(width * aspectRatio);
        }


        let videos = document.getElementsByTagName('video');
        console.log(videos);
        // Loop through the videos
        for (let i = 0; i < videos.length; i++) {

            // Stash the video
            let video = videos[i];

            // Check for VideoJs
            if (video.className.indexOf('video-js') > -1) {

                // When player is ready...
                videojs(video.id).ready(function () {

                    // Stash the player object
                    let player = this;
                    // Create an aspect ratio
                    let aspectRatio = player.height() / player.width();

                    // Apply the resizer
                    resizeVideoJs(player, aspectRatio);

                    // Add/Attach the event on resize
                    if (window.addEventListener) {
                        window.addEventListener('resize', function () {
                            resizeVideoJs(player, aspectRatio);
                        }, false);
                    } else if (window.attachEvent) {
                        window.attachEvent('onresize', function () {
                            resizeVideoJs(player, aspectRatio);
                        });
                    }
                });
            }
        }
    }

    bindActionToElement() {
        closeSearch.on('click', event => {
            event.preventDefault();
            if (closeSearch.hasClass('active')) {
                superSearch.removeClass('active');
                searchResult.hide();
                closeSearch.removeClass('active');
                $('body').removeClass('overflow');
                $('.quick-search > .form-control').focus();
            } else {
                superSearch.addClass('active');
                if (searchInput.val() !== '') {
                    this.searchFunction(searchInput.val());
                }
                $('body').addClass('overflow');
                closeSearch.addClass('active');
            }
        });

        searchInput.keyup(e => {
            searchInput.val(e.target.value);
            this.searchFunction(e.target.value);
        });

        this.initVideoPlayer();
    }
}

$(document).ready(function () {
    (new Ripple()).bindActionToElement();
});
