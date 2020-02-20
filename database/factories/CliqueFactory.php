<?php

use Faker\Generator as Faker;

$factory->define(\App\Entities\Cliques\Clique::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(1)
    ];
});
