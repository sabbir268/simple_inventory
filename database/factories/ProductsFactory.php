<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Products;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'price' => $faker->randomFloat(2,0,1000)
    ];
});
