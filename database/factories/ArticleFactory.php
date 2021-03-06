<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'name' => $faker->text('20'),
        'body' => $faker->text('400')
    ];
});
