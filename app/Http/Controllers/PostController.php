<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function showPost(Post $post){

        $user = $post->author()->first();
        $categories = $post->categories()->get();

        return view ('page.individual.post',[
            'post'=>$post,
            'categories'=>$categories,
            'user'=>$user
        ]);
    }

    public function showAllPosts(Post $post){

        return view ('page.all.posts',[
            'post'=>$post
        ]);
    }

    public function showForm(){
        return view('form.registerPost');
    }

    public function debug(Request $request){

        // método except()
        // var_dump($request->except(['_token']));

        $post = new Post();
        // 1a Forma de persistir dados no BD
        //$post->create($request->except(['_token']));

        // 2a Forma
        $post->user_id = mt_rand(1,3);
        // GAMBI SÓ PRA INSERIR, EDITAR FRONT PRA BUSCAR ALUNOS E SELECIONAR UM!!
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->save();

        return redirect('/artigo');

    }


}


