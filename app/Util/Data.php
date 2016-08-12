<?php

namespace App\Util;

use Validator;

class Data
{
    public static function obterIdadePelaDataMySql($dataNascimentoMysql)
    {
        $date = new \DateTime($dataNascimentoMysql);
        $hoje = new \DateTime();
        $diferenca = $date->diff($hoje);
        return (int)$diferenca->format('%Y');
    }

    public static function formatarMesAnoDataMySqlParaBr($dataMysql)
    {
        $date = new \DateTime($dataMysql);
        return $date->format('m/Y');
    }

    /**
     * Formata uma data para o padrão ISO 8601.
     *
     * A timezone utilizada será sempre UTC. Fica a cargo do consumidor converter para a timezone
     * necessária por sua aplicação.
     *
     * @param  string $datetime valor de data a ser formatado
     * @return DateTime::ISO8601 padrão utilizado para retorno de datas.
     */
    public static function formatarDataRetorno($datetime)
    {
        if (empty($datetime) || !Data::ehDataValida($datetime)) {
            return;
        }

        $date = new \DateTime($datetime);
        $date->setTimezone(new \DateTimeZone("UTC"));
        return $date->format(\DateTime::ISO8601);
    }

    public static function formatarDataApi($dataApi, $formatoRetorno = 'd/m/Y H:i:s', $considerarFusoHorario = false)
    {
        if (empty($dataApi)) {
            return;
        }

        // Com esta verificação mantemos a compatibilidade do método que anteriormente tinha como
        // segundo parâmetro se era para exibir a hora no formato retornado, padrão d/m/Y H:i:s.
        if (!is_string($formatoRetorno)) {
            $formatoRetorno = $formatoRetorno ? 'd/m/Y H:i:s' : 'd/m/Y';
        }

        $date = new \DateTime($dataApi);
        if ($considerarFusoHorario && !empty(config('app.timezone'))) {
            $date->setTimezone(new \DateTimeZone(config('app.timezone')));
        }
        return $date->format($formatoRetorno);
    }

    public static function obterDataNascimentoMaximaPermitida()
    {
        return date('Y-m-d', strtotime(sprintf('-%s years', CeviuConstantes::IDADE_MINIMA_PERMITIDA_CADASTRO_USUARIO)));
    }

    /**
     * Método verifica se a data informada é uma data válida.
     * Exemplo formatos: '2016-05-02T15:05:38+0000', '2016-05-01', '01/05/2016'
     * @param string $data
     * @return boolean
     */
    public static function ehDataValida($data)
    {
        if (empty($data)) {
            return false;
        }

        if (strpos($data, "/") !== false) {
            $dataBr = explode("/", $data);

            if (empty($dataBr[0]) || empty($dataBr[1]) || empty($dataBr[2])) {
                return false;
            }

            $ehDataBrValida = checkdate((int) $dataBr[1], (int) $dataBr[0], (int) $dataBr[2]);
            return $ehDataBrValida;
        }

        $dados['data'] = $data;
        $validator = Validator::make($dados, [
                    'data' => 'date',
        ]);

        return !$validator->fails();
    }
}
