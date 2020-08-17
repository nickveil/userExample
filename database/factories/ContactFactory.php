<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;



$factory->define(Contact::class, function (Faker $faker) {
    // gernerate 3 random colors
    $colors = collect(range(1,3))->map(function() use ($faker){
        return $faker->colorName;
    })->toArray();

    return [
        'name' => $faker->name,
        'phone'=> $faker->e164PhoneNumber,
        'address'=> $faker->address,
        'favorites'=>['colors'=>$colors],
    ];
});
