@if (!empty($url))
    <div class="video-content-box" contenteditable="false">
        <div class="video-player mb30" data-video="{{ $url }}">
            <video id="stream-id_{{ (Str::random(18)) }}" controls class="video-js vjs-default-skin vjs-fluid"></video>
        </div>
        @if (isset($title) && !empty($title))<div class="embed-cms-caption">{!! clean($title) !!}</div>@endif
    </div>
@else
    <p>{{ __('Video URL is invalid.') }}</p>
@endif
