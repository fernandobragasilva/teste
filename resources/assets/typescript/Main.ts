/// <reference path="typescript/../typings/tsd.d.ts" />
namespace Teste.Modulos {
    export class Main {
        public static inicializar() {
            var main = new Teste.Main();
            main.inicializarEventos();
            console.log("funcionou111");
        }
    }
}

namespace Teste {
    export class Main {
        private teste: string;

        public inicializarEventos() {
            this.teste = "teste";
            $('#teste').on('click', (e) => { this.aoClicarEmTestar(e); });
        }
        
        private aoClicarEmTestar(e: JQueryEventObject) {
            console.log("clicouu", this.teste);
        }
    }
}
