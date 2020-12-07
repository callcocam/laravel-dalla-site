
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 | desc arquivo copiado
 */
//mix.setPublicPath('public_html/');
mix
    .webpackConfig({
        resolve: {
            alias: {
                '@': path.resolve(__dirname, 'packages/resources/js'),
                '@assets': path.resolve(__dirname, 'packages/resources/js/assets'),
                '@store': path.resolve(__dirname, 'packages/resources/js/store'),
                '@plugins': path.resolve(__dirname, 'packages/resources/js/utilities/plugins'),
                '@views': path.resolve(__dirname, 'packages/resources/js/views'),
                '@components': path.resolve(__dirname, 'packages/resourcesjs/components'),
                '@sass': path.resolve(__dirname, 'packages/resources/sass')
            }
        },
        output: {
            chunkFilename: 'js/chunks/[name].[chunkhash].js',
        }
    }).js('packages/resources/js/app.js', 'public/_cdn/admin/js/app.js')
    .sass('packages/resources/js/assets/scss/app.scss', 'public/_cdn/admin/css/app.css');

    mix.js('resources/js/app.js', 'public/_cdn/js')
    .sass('resources/sass/app.scss', 'public/_cdn/css');
