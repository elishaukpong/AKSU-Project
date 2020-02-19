<?php

use App\Entities\Apartments\Apartment;
use App\Entities\Apartments\ApartmentType;
use App\Entities\User\User;
use Faker\Generator as Faker;

$factory->define(Apartment::class, function (Faker $faker) {
    $apartmentType = ApartmentType::all()->random();
    $apartmentCreator = User::all()->random();
    return [
       'name' => $faker->word,
        'landmark' => $faker->sentence,
        'description' => $faker->paragraph(1),
       'location' => $faker->paragraph(1),
       'apartment_type_id' => $apartmentType->id,
        'user_id' => $apartmentCreator->id,
        'approved' => $faker->randomElement([Apartment::APPROVED_APARTMENT, Apartment::UNAPPROVED_APARTMENT]),
    ];
});
