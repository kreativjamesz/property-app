<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomElement([1000000,1200000,1300000,1400000,1500000,1600000,1700000,1800000,1900000,2000000]),
        'description' => $faker->paragraph(1),
    ];
});
