<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category){

        echo "<h1>Categorias:</h1>";
        echo "<p>#{$category->id}, {$category->title}</p>";

        $posts = $category->posts()->get();

        if($posts){
            echo "<h1>Artigo:</h1>";

            foreach($posts as $post){
                echo "<p>#{$post->id},{$post->title}, {$post->subtitle}, {$post->content}</p>";
            }
        }
    }
}
