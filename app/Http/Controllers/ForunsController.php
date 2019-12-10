<?php

namespace App\Http\Controllers;

use App\Forum;
use App\Resposta;
use Illuminate\Http\Request;

class ForunsController extends Controller
{
    private $respostas_Controller;
    private $forum;

    public function __construct(RespostasController $respostasController)
    {
        $this->respostas_Controller = $respostasController;
        $this->forum = new Forum();
    }

    public function index()
    {
        $list_foruns = Forum::all();
        return view('forum.index', [
            'foruns' => $list_foruns
        ]);
    }

    public function createView()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        Forum::create($request->all());
        return redirect('/forum')->with('mensagem, "Fórum criado com sucesso');
    }

    public function storeResp(Request $request)
    {
        $resposta = new Resposta();
        $resposta->descricaoRes = $request->descricaoRes;
        $resposta->forum_id = $request->id;

        $this->respostas_Controller->store($resposta);

        return redirect('/forum/'.$request->id.'/comentar');
    }

    public function comentar($id)
    {
        return view('forum.resposta', [
            'forum' => $this->getForum($id)
        ]);
    }

    protected function getForum($id)
    {
        return $this->forum->find($id);
    }
}
