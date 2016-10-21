/// <reference path="typescript/../typings/tsd.d.ts" />
namespace Teste {
    export class Util {
        public static iniciarModulo(nomeModulo: string) {
            if (nomeModulo != "") {
                (Teste.Modulos as any)[nomeModulo].inicializar();
            }
        }
    }
}
