<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Task\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => '1',
    ];
});
