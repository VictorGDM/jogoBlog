<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'id',
        'tituloBlog',
        'subTitulo',
        'descricaoBlog'
    ];

    protected $table = 'Blogs';
}
