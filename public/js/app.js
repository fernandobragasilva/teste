var Teste;
(function (Teste) {
    var Modulos;
    (function (Modulos) {
        var Main = (function () {
            function Main() {
            }
            Main.inicializar = function () {
                var main = new Teste.Main();
                main.inicializarEventos();
            };
            return Main;
        }());
        Modulos.Main = Main;
    })(Modulos = Teste.Modulos || (Teste.Modulos = {}));
})(Teste || (Teste = {}));
var Teste;
(function (Teste) {
    var Main = (function () {
        function Main() {
        }
        Main.prototype.inicializarEventos = function () {
            var _this = this;
            this.teste = "teste";
            $('#teste').on('click', function (e) { _this.aoClicarEmTestar(e); });
        };
        Main.prototype.aoClicarEmTestar = function (e) {
            console.log("clicouu", this.teste);
        };
        return Main;
    }());
    Teste.Main = Main;
})(Teste || (Teste = {}));

var Teste;
(function (Teste) {
    var Util = (function () {
        function Util() {
        }
        Util.iniciarModulo = function (nomeModulo) {
            if (nomeModulo != "") {
                Teste.Modulos[nomeModulo].inicializar();
            }
        };
        return Util;
    }());
    Teste.Util = Util;
})(Teste || (Teste = {}));

//# sourceMappingURL=app.js.map
