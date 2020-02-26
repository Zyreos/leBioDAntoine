<?php

use Illuminate\Database\Seeder;

class ArtCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void,
     */
    public function run()
    {
        factory('App\ArtCategory', 10)->create();
    }
}
