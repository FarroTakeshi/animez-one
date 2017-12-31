const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |

js('resources/assets/js/app.js', 'public/js')
 */
mix.options({
   processCssUrls: false // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
});

mix.copyDirectory('resources/assets/img', 'public/img')
   .copyDirectory('resources/assets/fonts', 'public/fonts')
   .sass('resources/assets/sass/style.scss', 'public/css');
