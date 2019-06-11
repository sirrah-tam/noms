<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\FoodItem;
use Faker\Generator as Faker;

$factory->define(FoodItem::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'in_stock' => $faker->boolean
    ];
});
