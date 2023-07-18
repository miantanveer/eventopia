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
mix.sass('resources/assets/css/dark-style.scss', 'public/assets/css')
mix.sass('resources/assets/css/skin-modes.scss', 'public/assets/css')
mix.sass('resources/assets/css/transparent-style.scss', 'public/assets/css')
mix.sass('resources/assets/colors/color1.scss', 'public/assets/css')
mix.sass('resources/assets/scss/style.scss', 'public/assets/css')
mix.copyDirectory('resources/assets/css/custom', 'public/assets/css')
mix.copyDirectory('resources/assets/iconfonts', 'public/assets/iconfonts')
mix.copyDirectory('resources/assets/images', 'public/assets/images')
mix.copyDirectory('resources/assets/plugins', 'public/assets/plugins')
mix.copyDirectory('resources/assets/switcher', 'public/assets/switcher')

mix.options({
    processCssUrls: false
});

mix.browserSync('http://127.0.0.1:8000');
