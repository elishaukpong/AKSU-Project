<?php

use App\Entities\User\User;
use App\Entities\Files\File;
use Faker\Generator as Faker;

$factory->define(File::class, function (Faker $faker) {
    $user = User::all()->random();

    return [
        'name' => $faker->word,
        'slug' => $faker->paragraph,
        'description' => $faker->paragraph,
        'user_id' => $user->id,
        'size' =>  mt_rand(2000,6000),
        'type' => 'jpg',
    ];
});
