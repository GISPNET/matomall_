<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('postsCreate');
    }
    public function exibirConteudo()
    {
        $post = Post::find(1); // Supondo que você esteja obtendo o conteúdo do post de alguma forma

        return view('exibir-conteudo', compact('post'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
             'title' => 'required',
             'body' => 'required'
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

       dd($post->toArray());
    }
}
