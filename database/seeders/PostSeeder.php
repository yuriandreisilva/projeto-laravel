<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('post')->insert([
            // verificar com Gui
            // Desta forma precisa cadastrar sempre 3 users
            'user_id' => mt_rand(1,3),
            //
            'title' => Str::random(10),
            'slug' => Str::random(10),
            'subtitle' => Str::random(10),
            'content' => Str::random(10)
        ]);
    }
}
