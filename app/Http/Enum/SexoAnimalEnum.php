<?php

namespace App\Http\Enum;

use Illuminate\Validation\Rules\Enum;

class SexoAnimalEnum extends Enum
{
    const MACHO = 1;
    const FEMEA = 2;

    public static function getDescription($sexo)
    {
        switch ($sexo) {
            case self::MACHO:
                return "Macho";
            case self::FEMEA:
                return "Fêmea";
            default:
                return "Não informado";
        }
    }
}
