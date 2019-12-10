<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $fillable = [
        'id',
        'descricaoRes',
        'forum_id'
    ];

    protected $table = 'Respostas';

    public function forum()
    {
        return $this->belongsTo(Forum::class, 'forum_id');
    }
}
