const mix = require('laravel-mix');

mix.js('resources/js/AdminLTE.js', 'public/js/adminlte.min.js')
    .sass('resources/scss/AdminLTE.scss', 'public/css/adminlte.min.css');