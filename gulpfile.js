var elixir = require('laravel-elixir');

elixir.config.publicPath = '';

elixir(function(mix) {
    mix.less('style.less', 'style.css');
});

elixir(function(mix) {
    mix.scripts([
        'vendor/jquery.mobile.touch.js',
        'carousel.js',
        'menu.js',
        'bootstrap.js',
    ], 'js/website.min.js');
});