var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir.config.assetsPath = 'themes/new-theme/assets/';

// Where elixir will save compiled files
elixir.config.publicPath = 'themes/new-theme/assets/compiled/';

elixir(function(mix) {
    mix.sass('style.scss');

    mix.scripts(['app.js', 'jquery.js']);

    mix.livereload([
        'themes/new-theme/assets/compiled/css/style.css',
        'themes/new-theme/**/*.htm',
        'themes/new-theme/assets/compiled/js/*.js'
    ]);
})