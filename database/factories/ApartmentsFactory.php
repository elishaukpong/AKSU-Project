<?php

use App\Entities\Apartments\Apartment;
use App\Entities\Apartments\ApartmentType;
use App\Entities\User\User;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $apartmentType = ApartmentType::random();
    $apartmentCreator = User::random();
    return [
       'name' => $faker->word,
        'landmark' => $faker->words(mt_rand(3,5)),
        'description' => $faker->paragraph(mt_rand(2,4)),
       'location' => $faker->paragraph(mt_rand(2,4)),
       'apartment_type_id' => $apartmentType->id,
        'user_id' => $apartmentCreator->id,
        'approved' => $faker->randomElement([Apartment::APPROVED_APARTMENT, Apartment::UNAPPROVED_APARTMENT]),
    ];
});
