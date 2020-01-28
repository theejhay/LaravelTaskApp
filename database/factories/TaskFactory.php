<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use App\User;
use Faker\Generator as Faker;

/**
 * Factory that users faker to create a random task an assign
 * it to a random user account that exists.
 */
$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'title' => $faker ->realText($maxNbChars = 50),
        'priority' => $faker->randomElement(['Low', 'Medium', 'High']),
        'completed' => "Not Completed",
        'due_date' => $faker->dateTimeBetween($startDate = "-30 days", $endDate = "+30 days")->format('Y-m-d')
    ];
});

