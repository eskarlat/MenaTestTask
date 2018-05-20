<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'short_description' => $faker->text(120),
        'text' => $faker->text,
        'created_at' => $faker->dateTime()
    ];
});
