export class VtvCollege {
    loadPlayer = (el, url) => {
        let player = videojs(el, {
            autoplay: false,
            sources: [{
                type: "video/mp4",
                //type: "application/x-mpegURL",
                src: url
            }]
        });
        player.hlsQualitySelector();
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
        this.initVideoPlayer();
    }
}

$(".see-more").click(function() {
    var $div = $($(this).data('div')); //div to append
    var $link = $(this).data('link'); //current URL

    var $page = $(this).data('page'); //get the next page #
    var $href = $link + $page; //complete URL
    $.get($href, function(response) { //append data
        var $html = $(response).find("#posts").html();
        $div.append($html);
    });

    $(this).data('page', (parseInt($page) + 1)); //update page #
});


$(document).ready(function () {
    (new VtvCollege()).bindActionToElement();
});
