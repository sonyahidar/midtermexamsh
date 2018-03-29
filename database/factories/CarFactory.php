<?php

use Faker\Generator as Faker;

$factory->define(App\car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['ford', 'honda', 'toyota']),
        'model'=>$faker->word,
        'year'=>$faker->year($max = 'now'),
    ];
});
