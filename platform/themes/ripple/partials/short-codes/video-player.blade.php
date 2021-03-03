@if (!empty($url))
    <div class="embed-responsive embed-responsive-16by9 video-player mb30" data-video="{{ $url }}">
        <video id="stream-id_{{ (Str::random(18)) }}" controls class="video-js vjs-default-skin vjs-fluid"></video>
    </div>
    @if (isset($title) && !empty($title)) <div class="embed-cms-caption"><p>{!! clean($title) !!}</p></div>@endif
@else
    <p>{{ __('Video URL is invalid.') }}</p>
@endif
