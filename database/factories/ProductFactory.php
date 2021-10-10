<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween(1, 5),
        'name' => $faker->colorName,
        'code' => $faker->unique()->numberBetween(0, 1923123),
        'description' => $faker->text, // password
        'image' => $faker->imageUrl(),
        'price' => $faker->numberBetween(0, 5000),
    ];
});
