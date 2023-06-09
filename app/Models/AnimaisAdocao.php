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
        'status',
        'user_id_interessado',
        'observacao_interessado'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function userInteressado(){
        return $this->belongsTo(User::class, 'user_id_interessado');
    }



}
