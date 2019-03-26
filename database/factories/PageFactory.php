<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 3),
        'title' => $faker->text(50),
        'content' => $faker->paragraph,
    ];
});
