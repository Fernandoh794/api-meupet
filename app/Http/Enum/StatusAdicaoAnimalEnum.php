<?php

namespace App\Http\Enum;

use Illuminate\Validation\Rules\Enum;

class StatusAdicaoAnimalEnum extends Enum
{
    const DISPONIVEL = 1;
    const EM_PROCESSO_ADOCAO = 2;
    const ADOTADO = 3;


    public static function getDescription($status)
    {
        switch ($status) {
            case self::DISPONIVEL:
                return "Disponível";
            case self::EM_PROCESSO_ADOCAO:
                return "Em processo de adoção";
            case self::ADOTADO:
                return "Adotado";
            default:
                return "Não informado";
        }
    }


}
