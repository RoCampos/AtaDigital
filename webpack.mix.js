let mix = require('laravel-mix');

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
mix.copy('node_modules/StarAdmin-Free-Bootstrap-Admin-Template/vendors/',
    'public/vendors',false);
mix.copy('node_modules/StarAdmin-Free-Bootstrap-Admin-Template/images/',
    'public/images',false);
mix.copy('node_modules/StarAdmin-Free-Bootstrap-Admin-Template/css/style.css',
    'public/css/style.css');
mix.copy('node_modules/StarAdmin-Free-Bootstrap-Admin-Template/images/favicon.png',
    'public/images/');
mix.copy('node_modules/StarAdmin-Free-Bootstrap-Admin-Template/js/off-canvas.js',
    'public/js/');
mix.copy('node_modules/StarAdmin-Free-Bootstrap-Admin-Template/js/misc.js',
    'public/js/');
mix.copy('node_modules/StarAdmin-Free-Bootstrap-Admin-Template/js/dashboard.js',
    'public/js/');






