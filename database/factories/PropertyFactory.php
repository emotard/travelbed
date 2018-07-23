<?php

use Faker\Generator as Faker;

$factory->define(App\Property::class, function (Faker $faker) {
    return [
        'user_id' => App\User::inRandomOrder()->first()->id,
        'name' => $faker->name,
        'first_line_address' => $faker->address,
        'second_line_address' => $faker->address,
        'post_code' => $faker->address,
        'price' => $faker->randomDigit,
    ];
});