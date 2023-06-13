<?php

namespace App\Http\Resources;

use App\Http\Enum\SexoAnimalEnum;
use App\Services\IbgeServices;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;


class AnimalAdocaoResource extends JsonResource {

    public function toArray($request)
    {

        $serviceIbge = new IbgeServices();
        return [
            "id" => $this->id,
            "usuario" => $this->user->name,
            "nome" => $this->nome,
            "raca" => $this->raca,
            "idade" => $this->idade,
            "sexo" => SexoAnimalEnum::getDescription($this->sexo),
            "estado" => $serviceIbge->getEstadoById(11)['nome'],
            "cidade" => $serviceIbge->getCidadeById(1100023)['nome'],
            "imagem" => $this->imagem,
            "descricao" => $this->descricao,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }


}
