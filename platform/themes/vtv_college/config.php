<?php

use Botble\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme)
        {
            // Partial composer.
            // $theme->partialComposer('header', function($view) {
            //     $view->with('auth', \Auth::user());
            // });

            // You may use this event to set up your assets.
//            $theme->asset()->usePath()->add('style', 'css/style.css');
//            $theme->asset()->container('footer')->usePath()->add('script', 'js/script.js');

            $theme
                ->asset()
                ->container('footer')
                ->usePath()->add('jquery', 'library/js/jquery.min.js')
                ->usePath()->add('popper', 'library/js/popper.min.js')
                ->usePath()->add('bootstrap', 'library/js/bootstrap.min.js')
                ->usePath()->add('solid', 'library/js/solid.js')
                ->usePath()->add('popper', 'library/js/popper.min.js')
                ->usePath()->add('brands', 'library/js/brands.min.js')
                ->usePath()->add('all', 'library/js/all.js')
                ->usePath()->add('slick', 'library/js/slick.min.js')
                ->usePath()->add('jscroll', 'library/js/masonry.pkgd.min.js')
                ->usePath()->add('carousel', 'library/js/carousel.js')
                ->usePath()->add('intlTelInput', 'library/js/intlTelInput.min.js')
                ->usePath()->add('photoswipe', 'library/js/photoswipe.min.js')
                ->usePath()->add('photoswipe-ui-default', 'library/js/photoswipe-ui-default.min.js')
                ->usePath()->add('slider', 'scripts/slider-3d.js')
                ->usePath()->add('video-js', 'library/js/video.min.js', ['jquery'], [], '5.11')
                ->usePath()->add('videojs-contrib-quality-levels', 'library/js/videojs-contrib-quality-levels.min.js', ['jquery'], [], '5.11')
                ->usePath()->add('videojs-hls-quality-selector', 'library/js/videojs-hls-quality-selector.js', ['jquery'], [], '5.11')
                ->usePath()->add('script.js', 'js/script.js', ['jquery'], [], '5.11');;

            $theme
                ->asset()
                ->usePath()->add('bootstrap', 'library/css/bootstrap.min.css')
                ->usePath()->add('all', 'library/css/all.css')
                ->usePath()->add('fontawesome', 'library/css/fontawesome.css')
                ->usePath()->add('solid', 'library/css/solid.css')
                ->usePath()->add('brands', 'library/css/brands.css')
                ->usePath()->add('slick-theme', 'library/css/slick-theme.css')
                ->usePath()->add('slick', 'library/css/slick.css')
                ->usePath()->add('intlTelInput', 'library/css/intlTelInput.css')
                ->usePath()->add('main', 'main.css')
                ->usePath()->add('introduce', 'tuyen-sinh.css')
                ->usePath()->add('photoswipe', 'library/css/photoswipe.css')
                ->usePath()->add('photoswipe-default-skin', 'library/css/default-skin.css')
                ->usePath()->add('video-js', 'library/css/video-js.css')
                ->usePath()->add('style', 'css/style.css');


            if (function_exists('shortcode')) {
                $theme->composer(['index', 'page', 'post', 'category'], function (\Botble\Shortcode\View\View $view) {
                    $view->withShortcodes();
                });
            }
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
