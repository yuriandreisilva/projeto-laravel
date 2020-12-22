<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function showCategory(Category $category){

        return view ('page.individual.category',[
            'category'=>$category,
        ]);
    }

    public function showAllCategories(){

        $categories = DB::table('categories')
        ->select('categories.*')
        ->get();

        return view ('page.all.categories',[
            'categories'=>$categories
        ]);
    }
}
