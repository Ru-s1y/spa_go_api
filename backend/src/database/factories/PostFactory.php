<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'content'   =>  $faker->realText(255),
        'user_id'   =>  rand(1, 50)
    ];
});
