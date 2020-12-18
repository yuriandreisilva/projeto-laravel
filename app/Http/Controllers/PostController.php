<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function show(Post $post){
        // get() para pegar todos
        //$posts = DB::table('post')->get();

        echo "<h1>Artigo:</h1>";
        echo "<p>#{$post->id},{$post->title}, {$post->subtitle}, {$post->content}</p>";

        $user = $post->author()->first();



        if($user){
            echo "<h1>Autor:</h1>";
            echo "<p>Nome: {$user->name} E-mail: {$user->email}";
        }

        $categories = $post->categories()->get();

        if($categories){
            echo "<h1>Categorias:</h1>";

            foreach($categories as $category){
                echo "<p>#{$category->id}, {$category->title}";
            }
        }

    }

    public function viewForm(){
        return view('form.index');
    }

    public function debug(Request $request){

        // método except()
        // var_dump($request->except(['_token']));

        $post = new Post();
        // 1a Forma de persistir dados no BD
        //$post->create($request->except(['_token']));

        // 2a Forma
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->save();

        return redirect('/');

    }


}


