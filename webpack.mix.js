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

mix.postCss('resources/assets/css/animated.css', 'public/assets/css')
mix.postCss('resources/assets/css/custom/landing-page.css', 'public/assets/css')
mix.sass('resources/assets/css/dark-style.scss', 'public/assets/css')
mix.sass('resources/assets/css/skin-modes.scss', 'public/assets/css')
mix.sass('resources/assets/css/transparent-style.scss', 'public/assets/css')
mix.sass('resources/assets/colors/color1.scss', 'public/assets/css')
mix.sass('resources/assets/scss/style.scss', 'public/assets/css')

mix.options({
    processCssUrls: false
});

mix.browserSync('http://127.0.0.1:8000');
