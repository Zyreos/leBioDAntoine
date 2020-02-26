<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArtCategory;
use Faker\Generator as Faker;

$factory->define(ArtCategory::class, function (Faker $faker) {
    return
        [
            'name' => $faker->word
        ];
});
