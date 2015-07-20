var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    /** Predefined Styles **/
    mix.styles([
     'bower_components/skeleton-css/css/normalize.css',
     'bower_components/skeleton-css/css/skeleton.css'
    ], 'public/css/vendor.css', './');

    /** App Files **/
    mix.less('backend.less', 'public/css/backend.css');

});
