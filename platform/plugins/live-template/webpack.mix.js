let mix = require('laravel-mix');

const dist = 'public/vendor/core/plugins/live-template';
const source = './platform/plugins/live-template';

mix 
    .css(source + '/resources/assets/css/main.css', dist + '/assets').options({
        processCssUrls: false
    })
    .copyDirectory(source + '/resources/assets', dist + '/assets')
    .js(source + '/resources/assets/js/index.js', dist + '/js').react()
    .copyDirectory(dist + '/js', source + '/public/js');
