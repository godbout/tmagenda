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
    mix.copy('node_modules/bootstrap-material-design/dist/css/', 'public/css/')
        .copy('node_modules/bootstrap-material-design/dist/js/', 'public/js/')
        .copy('node_modules/bootstrap-material-design/bower_components/jquery/dist/jquery.min.js', 'public/js/')
        .sass('app.scss');
});