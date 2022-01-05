const mix = require('laravel-mix');
const {disableNotifications} = require("laravel-mix");
const path = require("path");

//console.log(path.resolve(__dirname));
mix.webpackConfig({
    resolve: {
        alias: {
            '../img': path.resolve(__dirname + '/public/assets/img'),
            '../fonts': path.resolve(__dirname + '/public/assets/fonts')
        }
    }
});
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

// mix
//     .js('resources/js/app.js', 'public/js')
//   //  .postCss('resources/css/_template.css', 'public/css', [])
//     .sass('resources/css/app.scss','public/css').sourceMaps();


mix
    .js('resources/js/crowdtize/app.js', 'public/crowdtize/js')
    //  .postCss('resources/css/_template.css', 'public/css', [])
    .sass('resources/css/crowdtize/datepicker.scss','public/crowdtize/css')
.postCss("resources/css/crowdtize/app.css", "public/crowdtize/css", [
    require("tailwindcss"),
]).sourceMaps()

mix.disableNotifications();
