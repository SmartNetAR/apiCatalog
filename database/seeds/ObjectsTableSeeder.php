<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= DB::table('users')->select('id')->first();
        
        DB::table('objects')->insert([
            'name' => Str::random(10),
            'description' => Str::random(30),
            'location' => Str::random(20),
            'sub-location' => Str::random(30),
            'category' => Str::random(20),
            'tag' => Str::random(15),
            'user_id' => $user->id
        ]);
    }
}
