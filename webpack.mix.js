const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.js('resources/js/common.js', 'public/js').sourceMaps()


mix.js('resources/js/page/home/index.js', 'public/js/page/home/').sourceMaps()

mix.postCss('resources/css/custom.css', 'public/css')

mix.postCss('resources/css/common/color.css', 'public/css/common')
mix.postCss('resources/css/common/font.css', 'public/css/common')
mix.postCss('resources/css/common/index.css', 'public/css/common')

mix.postCss('resources/css/page/home/index.css', 'public/css/home')


if (mix.inProduction()) {
    mix.version();
    mix.disableNotifications();
}


