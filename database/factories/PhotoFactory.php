<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Photo;
use App\User;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'image_path' => $faker->imageUrl($width = 640, $height = 480),
        'title' => $faker->text(50),
        'body' => $faker->text(1000),
        'address' => $faker->address,
        'user_id' => function() {
            return factory(User::class);
        }
    ];
});
