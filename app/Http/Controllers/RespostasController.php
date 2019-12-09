<?php

namespace App\Http\Controllers;

use App\Resposta;
use Illuminate\Http\Request;

class RespostasController extends Controller
{
    public function index()
    {
        $list_respostas = Resposta::all();
        return view('respostas.index', [
            'respostas' => $list_respostas
        ]);
    }
}
