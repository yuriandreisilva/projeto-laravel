<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Post;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function total(){
            $users = Post::withCount('author')->get();

            foreach ($users as $user) {
                $maxUsers =+1;
            }
        return $maxUsers;
        }

        DB::table('addresses')->insert([
            'user_id' => mt_rand(1,total()),
            'street' => Str::random(10),
            'number' => Str::random(10),
            'city' => Str::random(10),
            'state' => Str::random(2),
        ]);
    }
}
