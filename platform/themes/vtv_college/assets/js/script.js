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

$(document).ready(function () {
    (new VtvCollege()).bindActionToElement();
});
