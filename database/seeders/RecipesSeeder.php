<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Recipe::class, 10)->create();
    }
}
