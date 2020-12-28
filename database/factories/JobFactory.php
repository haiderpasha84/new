<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        
        'user_id' => factory('App\User'),
        'jname' => $faker->sentence,
        'jtype' => 'part-time',
        'jimage' => $faker->imageUrl($width = 640, $height = 480),
        'jdescription' =>  $faker->text($maxNbChars = 200),
        'jrequirements' => $faker->sentence,
        'jaddress' => Str::random(10),
        'jsalary_min' => $faker->numberBetween($min = 1000, $max = 9000), 
        'jsalary_max' => $faker->numberBetween($min = 9001, $max = 90000), 
        'jdeadline' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'jexperience' => $faker->numberBetween($min = 1, $max = 9), 
    ];
});
