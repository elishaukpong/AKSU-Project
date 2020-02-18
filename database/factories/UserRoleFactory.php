<?php

use Faker\Generator as Faker;

$factory->define(App\Entities\User\Role::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
