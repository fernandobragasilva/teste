var elixir = require('laravel-elixir');
var elixirTypscript = require('elixir-typescript');
require('laravel-elixir-vueify-next');

elixir(function(mix) {
    mix.sass('app.scss');
    mix.browserify('main.js');
});

elixir(function(mix) {
  mix.typescript(['Main.ts', 'Util.ts']);
});
