<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Message::class, function (Faker $faker) {
    return [
        'sender_id' => 1,
        'receiver_id' => 2,
        'subject' => $faker->sentence,
        'message' => $faker->sentence,
    ];
});
