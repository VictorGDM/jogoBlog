<?php

namespace App\Http\Controllers;

use App\Documentacao;
use Illuminate\Http\Request;

class DocumentacaoController extends Controller
{
    public function index()
    {
        $list_documentacao = Documentacao::all();
        return view('documentacao.index', [
            'documentacoes' => $list_documentacao
        ]);
    }
}
