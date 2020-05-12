<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker->lastName,
        'detail' => $faker->sentence,
        'deadline' => $faker->dateTimeThisMonth()
    ];
});