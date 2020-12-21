<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    // $table->id('id');
    // $table->string('title');
    // $table->string('slug');
    // $table->text('description')->nullable();
    // $table->timestamps();

    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

    }
}

