const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/font-awesome.min.css',
    'resources/css/hover.css',
    'resources/css/animate.css',
    'resources/css/magnific-popup.css',
    'resources/css/owl.carousel.css',
    'resources/css/owl.transitions.css',
    'resources/css/settings.css',
    'resources/css/layers.css',
    'resources/css/navigation.css',
    'resources/css/style.css',
],'public/css/app.css')
    .scripts([
        'resources/js/email-decode.min.js',
        'resources/js/jquery.min.js',
        'resources/js/bootstrap.min.js',
        'resources/js/jquery.viewport.js',
        'resources/js/smoothscroll.js',
        'resources/js/jquery.validate.min.js',
        'resources/js/jquery.ajaxchimp.min.js',
        'resources/js/jQuerySimpleCounter.js',
        'resources/js/wow.min.js',
        'resources/js/jquery.stellar.min.js',
        'resources/js/jquery.magnific-popup.js',
        'resources/js/owl.carousel.min.js',
        'resources/js/imagesloaded.pkgd.js',
        'resources/js/isotope.pkgd.min.js',
        'resources/js/interface.js',
        'resources/js/jquery.themepunch.tools.min.js',
        'resources/js/jquery.themepunch.revolution.min.js',
        'resources/js/revolution.extension.actions.min.js',

        'resources/js/revolution.extension.carousel.min.js',
        'resources/js/revolution.extension.kenburn.min.js',
        'resources/js/revolution.extension.layeranimation.min.js',
        'resources/js/revolution.extension.migration.min.js',
        'resources/js/revolution.extension.navigation.min.js',
        'resources/js/revolution.extension.parallax.min.js',
        'resources/js/revolution.extension.slideanims.min.js',
        'resources/js/revolution.extension.video.min.js',
    ],'public/js/app.js');
