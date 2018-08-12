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

mix.copy('resources/assets/css/sb-admin-2.min.css','public/css')
	.js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/js/sb-admin-2.js', 'public/js')
   	.sass('resources/assets/sass/app.scss', 'public/css');

mix.copyDirectory ('node_modules/startbootstrap-sb-admin-2/vendor',
	'resources/assets/vendor',false);

mix.copyDirectory ('node_modules/startbootstrap-sb-admin-2/vendor',
	'public/vendor',false);

mix.copyDirectory ('node_modules/startbootstrap-sb-admin-2/vendor',
	'public/teste',false).
	extract(['vue']);

mix.sourceMaps();

// datatables
// mix.copy ('resources/views/layouts/vendor/datatables/css/*','public/vendor/datatables/css')
// 	.js ('resources/views/layouts/vendor/datatables/js/*','public/vendor/datatables/js')
// 	.copy ('resources/views/layouts/vendor/datatables/images/*','public/vendor/datatables/images')


// mix.copy('resources/views/layouts/vendor/datatables-plugins/*', 
// 		'public/vendor/datatables-plugins');

// mix.copy('resources/views/layouts/vendor/datatables-responsive/*', 
// 		'public/vendor/datatables-responsive');

// mix.copy('resources/views/layouts/vendor/flot/*', 
// 		'public/vendor/flot');

// mix.copy('resources/views/layouts/vendor/flot-tooltip/*', 
// 		'public/vendor/flot-tooltip');

// mix.copy('resources/views/layouts/vendor/font-awesome/css/*', 
// 		'public/vendor/font-awesome/css')
// 	.copy('resources/views/layouts/vendor/font-awesome/fonts/*', 
// 		'public/vendor/font-awesome/fonts')
// 	.copy('resources/views/layouts/vendor/font-awesome/less/*', 
// 		'public/vendor/font-awesome/less')
// 	.copy('resources/views/layouts/vendor/font-awesome/scss/*', 
// 		'public/vendor/font-awesome/scss');

// mix.copy('resources/views/layouts/vendor/jquery/*', 
// 		'public/vendor/jquery/js');

// mix.copy('resources/views/layouts/vendor/metisMenu/*', 
// 		'public/vendor/metisMenu');

// mix.copy('resources/views/layouts/vendor/morrisjs/*', 
// 		'public/vendor/morrisjs');

// mix.copy('resources/views/layouts/vendor/raphael/*', 
// 		'public/vendor/raphael');

// mix.copy('resources/views/layouts/vendor/public/*', 
// 		'public/vendor/public');

// mix.copy('resources/views/layouts/vendor/data/*',
// 		'public/vendor/data');






