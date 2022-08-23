<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'details'       => $this->faker->sentences(4, true),
        'client'         => $this->faker->name(),
        'is_fulfilled' => $this->faker->boolean(),
    ];
});
