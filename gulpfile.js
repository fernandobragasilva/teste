var elixir = require('laravel-elixir');
var elixirTypscript = require('elixir-typescript');

elixir(function(mix) {
    mix.sass('app.scss');
});

elixir(function(mix) {
  mix.typescript(['Main.ts', 'Util.ts']);
});
