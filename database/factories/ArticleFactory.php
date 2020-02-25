<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'price'       => $faker->numberBetween(0,300),
        'description' => $faker->realText(200),
        'stock'       => $faker->numberBetween(0,300)
    ];
});
