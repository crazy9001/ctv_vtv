import {Helpers} from '../Helpers/Helpers';

export class MediaDetails {
    constructor() {
        this.$detailsWrapper = $('.rv-media-main .rv-media-details');

        this.descriptionItemTemplate = '<div class="rv-media-name"><p>__title__</p>__url__</div>';

        this.onlyFields = [
            'name',
            'full_url',
            'size',
            'mime_type',
            'created_at',
            'updated_at',
            'nothing_selected',
        ];
    }

    loadPlayer = (el, url) => {
        let player = videojs(el, {
            autoplay: false,
            sources: [{
                type: MEDIA_ENABLE_HLS === true ? 'application/x-mpegURL' : 'video/mp4',
                src: url
            }]
        });
        player.play();
    };

    initPlayer() {
        let videos = document.getElementsByTagName('video');
        for (let i = 0; i < videos.length; i++) {
            let video = videos[i];
            this.loadPlayer(video.id, $(video).closest('div.video-player').data('video'));
        }
    }

    renderData(data) {
        let _self = this;

        let thumb = '';
        if (data.type === 'image') {
            thumb = '<img src="' + data.full_url + '" alt="' + data.name + '">'
        } else if (data.type === 'video') {
            thumb = '<div class="embed-responsive embed-responsive-16by9 video-player mb30" data-video="'+ data.full_url +'">' +
                '        <video id="stream-id_'+ Math.random().toString(36).substring(7) +'" controls class="video-js vjs-default-skin vjs-fluid"></video>' +
                '    </div>'
        } else {
            thumb = '<i class="' + data.icon + '"></i>'
        }
        console.log(thumb);
        //let thumb = data.type === 'image' ? '<img src="' + data.full_url + '" alt="' + data.name + '">' : '<i class="' + data.icon + '"></i>';
        let description = '';
        let useClipboard = false;
        _.forEach(data, (val, index) => {
            if (_.includes(_self.onlyFields, index)) {
                if (!_.includes(['size', 'mime_type'], index)) {
                    description += _self.descriptionItemTemplate
                        .replace(/__title__/gi, RV_MEDIA_CONFIG.translations[index])
                        .replace(/__url__/gi, val ? index === 'full_url' ? '<div class="input-group"><input id="file_details_url" type="text" value="' + val + '" class="form-control"><span class="input-group-prepend"><button class="btn btn-default js-btn-copy-to-clipboard" type="button" data-clipboard-target="#file_details_url" title="Copied"><img class="clippy" src="' + Helpers.asset('/vendor/core/core/media/images/clippy.svg') + '" width="13" alt="Copy to clipboard"></button></span></div>' : '<span title="' + val + '">' + val + '</span>' : '');
                    if (index === 'full_url') {
                        useClipboard = true;
                    }
                }
            }
        });
        _self.$detailsWrapper.find('.rv-media-thumbnail').html(thumb);
        _self.$detailsWrapper.find('.rv-media-description').html(description);
        if (useClipboard) {
            new Clipboard('.js-btn-copy-to-clipboard');
            $('.js-btn-copy-to-clipboard').tooltip()
                .on('mouseenter', () => {
                    $(this).tooltip('hide');
                })
                .on('mouseleave', () => {
                    $(this).tooltip('hide');
                });
        }
        this.initPlayer();
    }
}
