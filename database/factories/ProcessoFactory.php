<?php

use Faker\Generator as Faker;

$factory->define(App\Processo::class, function (Faker $faker) {
    return [
        'assunto'=>$faker->sentence(4,true),
        'relatorio' => $faker->realText(191)
    ];
});
