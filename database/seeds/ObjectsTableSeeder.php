<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $user= DB::table('users')->select('id')->first();
        for ( $i = 0; $i < 30; $i++ ) {
            DB::table('objects')->insert([
                'name' =>           $faker->sentence($nbWords = 3, $variableNbWords = true),
                'description' =>    $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
                'location' =>       Str::random(20),
                'sub_location' =>   Str::random(30),
                'category' =>       Str::random(20),
                'tag' =>            Str::random(15),
                'url_image' =>      $faker->url(),
                'user_id' =>        $user->id
            ]);
        }
    }
}
