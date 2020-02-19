<?php

use App\Entities\User\User;
use App\Entities\Files\File;
use Faker\Generator as Faker;

$factory->define(File::class, function (Faker $faker) {
    $user = User::all()->random();

    $apartments = scandir(storage_path(). '/app/public/apartments');
    unset($apartments[0]);
    unset($apartments[1]);
    $apartments = collect($apartments)->map(function($apartment){
        return 'apartments/' . $apartment;
    });

    $image = $faker->randomElement($apartments->toArray());
    $path = storage_path() . '/app/public/' . $image;

    $uploadedFile = new Illuminate\Http\UploadedFile($path, 'randomName');

    return [
        'name' => $faker->word,
        'slug' => $faker->paragraph,
        'description' => $faker->paragraph,
        'user_id' => $user->id,
        'size' =>  $uploadedFile->getSize(),
        'type' => $uploadedFile->getMimeType(),
        'path' => $image
    ];
});
