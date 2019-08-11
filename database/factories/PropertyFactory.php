<?php

use App\Property;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
    return [
        'name' => $faker->text(5),
        'description' => $faker->text,
        'price' => $faker->randomNumber(6),
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'zip' => $faker->postcode,
        'country' => $faker->countryCode,
        'photo' => $faker->imageUrl,
    ];
});
