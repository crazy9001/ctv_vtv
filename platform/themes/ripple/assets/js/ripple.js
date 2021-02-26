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
    loadPlayer = (el, url) => {
        let player = videojs(el, {
            autoplay: true,
            sources: [{
                //type: "video/mp4",
                type: "application/x-mpegURL",
                src: url
            }]
        });
        player.play();
    };
    initVideoPlayer() {
        let videos = document.getElementsByTagName('video');
        for (let i = 0; i < videos.length; i++) {
            let video = videos[i];
            this.loadPlayer(video.id, $(video).closest('div.video-player').data('video'));
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
