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
}
