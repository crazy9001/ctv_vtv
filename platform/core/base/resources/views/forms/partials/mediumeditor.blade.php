@php
    Assets::addStylesDirectly([
        'vendor/core/core/base/libraries/mediumeditor/medium-editor.min.css'
    ])
    ->addScriptsDirectly([
        'vendor/core/core/base/libraries/mediumeditor/medium-editor.min.js',
        'vendor/core/core/base/libraries/mediumeditor/medium-editor-insert.js',
        'vendor/core/core/base/js/editor.js',
    ]);

    $attributes['class'] = Arr::get($attributes, 'class', '') . ' form-control editor-medium';
    $attributes['id'] = Arr::get($attributes, 'id', $name);
    $attributes['rows'] = Arr::get($attributes, 'rows', 4);

@endphp
<div class="editor-medium"></div>
{{--{!! Form::textarea($name, $value, $attributes) !!}--}}
