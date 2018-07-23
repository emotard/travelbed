<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'property_id' => function () {
            return factory(App\Property::class)->create()->id;
        },
        'review' => $faker->paragraph,
        'star_rating' => $faker->numberBetween(1,5)
    ];
});