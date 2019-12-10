<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = [
        'id',
        'tituloFor',
        'tipo',
        'descricaoFor'
    ];

    protected $table = 'Foruns';

    public function resposta()
    {
        return $this->hasMany(Resposta::class, 'forum_id');
    }
}
