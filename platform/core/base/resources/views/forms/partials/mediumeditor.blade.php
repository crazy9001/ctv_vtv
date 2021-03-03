@php
    Assets::addStylesDirectly([
        //'vendor/core/core/base/libraries/mediumeditor/medium-editor.min.css',
        //'vendor/core/core/base/libraries/mediumeditor/extensions/tables/medium-editor-tables.css',
        'vendor/core/core/base/libraries/mediumeditor/flat.min.css',
        'vendor/core/core/base/libraries/mediumeditor/custom-medium-editor-skin.css',
    ])
    ->addScriptsDirectly([
        //'vendor/core/core/base/libraries/mediumeditor/medium-editor.min.js',
        //'vendor/core/core/base/libraries/mediumeditor/extensions/tables/medium-editor-tables.js',
        'vendor/core/core/base/js/editor.js'
    ]);

    $attributes['class'] = Arr::get($attributes, 'class', '') . ' form-control editor-medium';
    $attributes['id'] = Arr::get($attributes, 'id', $name);
    $attributes['rows'] = Arr::get($attributes, 'rows', 4);

@endphp
{!! Form::textarea($name, $value, $attributes) !!}
