<?php

namespace App\Models;

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

    public function user(){
        return $this->belongsTo(User::class);
    }

}
