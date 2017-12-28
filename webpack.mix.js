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
mix.copyDirectory('resources/assets/img', 'public/img');
   .sass('resources/assets/sass/style.scss', 'public/css')
   //.sass('resources/assets/sass/*.scss', 'public/css')
   .sourceMaps();
