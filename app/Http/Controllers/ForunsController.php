<?php

namespace App\Http\Controllers;

use App\Forum;
use Illuminate\Http\Request;

class ForunsController extends Controller
{
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
        return redirect('/forum')->with('messade, "Fórum criado com sucesso');
    }
}
