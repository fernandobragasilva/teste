var elixir = require('laravel-elixir');
var elixirTypscript = require('elixir-typescript');
require('laravel-elixir-vueify');

elixir(function (mix) {
    mix.typescript(['Main.ts', 'Util.ts', 'Teste.ts']);
    mix.browserify('inicio.js');
});
