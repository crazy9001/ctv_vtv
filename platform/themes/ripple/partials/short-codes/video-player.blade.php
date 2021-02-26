@if (!empty($url))
    <div class="embed-responsive embed-responsive-16by9 video-player mb30">
        <video
            class="video-js vjs-default-skin vjs-fluid"
            controls
            preload="auto"
            width="640"
            height="264"
            data-setup="{}"
        >
            <source src="{{ $url }}" type="video/mp4" />
        </video>
    </div>
    <div class="embed-cms-caption"><p>{!! clean($title) !!}</p></div>
@else
    <p>{{ __('Video URL is invalid.') }}</p>
@endif
