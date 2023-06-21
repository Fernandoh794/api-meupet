<?php

namespace App\Http\Resources;

use App\Http\Enum\SexoAnimalEnum;
use App\Services\IbgeServices;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;


class AnimalAdocaoResource extends JsonResource {

    public function toArray($request)
    {

        return [
            "id" => $this->id,
            "usuario" => $this->user->name,
            "nome" => $this->nome,
            "raca" => $this->raca,
            "idade" => $this->idade,
            "sexo" => SexoAnimalEnum::getDescription($this->sexo),
            "estado" => $this->estado_cod,
            "cidade" => $this->cidade_cod,
            "imagem" => $this->imagem,
            "descricao" => $this->descricao,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "status" => $this->status
        ];
    }


}
