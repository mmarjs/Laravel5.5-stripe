<?php

use Faker\Generator as Faker;

$factory->define(GigHighway\Vendor::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->paragraph,
        'featured' => 0,
        'email' => $faker->unique()->email,
        'phone' => $faker->phoneNumber,
        'website' => $faker->url,
        'description_brief' => $faker->paragraph,
        'show_phone_number' => false,
        'what_to_expect' => '',
        'pay_range_min' => 0,
        'pay_range_max' => 100,
        'has_liability_insurance' => true,
    ];
});
