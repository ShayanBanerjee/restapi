<?php

use Faker\Generator as Faker;

$factory->define(App\College::class, function (Faker $faker) {
    return [
        'college_name'=>$faker->text(50),
        'city'=>$faker->text(50),
        'description' => $faker->text(100)
    ];
});
