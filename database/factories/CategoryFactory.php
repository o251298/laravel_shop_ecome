<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'code' => $faker->unique()->numberBetween(0, 12332),
        'description' => $faker->text, // password
        'image' => $faker->imageUrl(),
    ];
});
