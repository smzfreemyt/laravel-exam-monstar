<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'phone'   => $faker->numberBetween($min = 5000, $max = 90000),
        'email'=> $faker->email,
        'company_id' => 1
    ];
});
