let mix = require('laravel-mix');

const dist = 'public/vendor/core/plugins/live-template';
const source = './platform/plugins/live-template';

mix
    .js(source + '/resources/assets/js/index.js', dist + '/js').react()
    .copyDirectory(dist + '/js', source + '/public/js');
