<?php

namespace App\Models;

use App\Http\Enum\StatusAdicaoAnimalEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimaisAdocao extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'raca',
        'idade',
        'sexo',
        'estado_cod',
        'cidade_cod',
        'imagem',
        'descricao',
        'status'
    ];

    protected $casts = [
        'status' => StatusAdicaoAnimalEnum::class
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

}
