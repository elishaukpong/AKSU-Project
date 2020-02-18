<?php

use App\Entities\Apartments\ApartmentType;
use Faker\Generator as Faker;

$factory->define(ApartmentType::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(1),
    ];
});
