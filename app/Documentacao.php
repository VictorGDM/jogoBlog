<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentacao extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'perfilUsuario',
        'aplicacao',
        'plataforma',
        'ritmo',
        'modoJogo',
        'genero',
        'niveis',
        'jogabilidade',
        'musiSono',
        'narrativca',
        'personagens'
    ];

    protected $table = 'Documentacoes';
}
