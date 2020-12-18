<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts_categories')->insert([
            // verificar com Gui
            'post_id' => mt_rand(1,3),
            //
            'categories_id' => mt_rand(1,3)
        ]);
    }
}
