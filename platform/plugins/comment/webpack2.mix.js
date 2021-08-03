const mix = require('laravel-mix')
const path = require('path');

const dist = 'public/vendor/core/plugins/comment';
const source = './platform/plugins/comment';

mix
    .js(source + '/resources/assets/js/app.js', dist + '/js')
    .copy(dist + '/js/app.js', source + '/public/js')
    .js(source + '/resources/assets/js/admin.js', dist + '/js')
    .copy(dist + '/js/admin.js', source + '/public/js')
    .js(source + '/resources/assets/js/comments.js', dist + '/js')
    .copy(dist + '/js/comments.js', source + '/public/js')

    .sass(source + '/resources/assets/sass/app.scss', dist + '/css')
    .copy(dist + '/css/app.css', source + '/public/css')
    .sass(source + '/resources/assets/sass/admin.scss', dist + '/css')
    .copy(dist + '/css/admin.css', source + '/public/css')
    .sass(source + '/resources/assets/sass/comments.scss', dist + '/css')
    .copy(dist + '/css/comments.css', source + '/public/css');


// mix.js('resources/assets/js/app.js', '')
// mix.sass('resources/assets/sass/app.scss', '')
//
// mix.js('resources/assets/js/admin.js', '')
// mix.sass('resources/assets/sass/admin.scss', '')
//
// mix.js('resources/assets/js/comments.js', '')
// mix.sass('resources/assets/sass/comments.scss', '')

// mix.disableNotifications()
// //mix.setPublicPath(publicPath)
//
// if (mix.inProduction()) {
//   mix.version()
// } else {
//   mix.sourceMaps()
// }
//
mix.webpackConfig({
  externals: {
    'pusher-js': 'Pusher'
  },

  resolve: {
    alias: {
      '@': path.join(__dirname, './resources/assets/js')
    }
  },

  output: {
    library: 'Comments',
    libraryTarget: 'umd'
  }
})
