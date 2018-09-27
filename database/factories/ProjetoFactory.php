<?php

use Faker\Generator as Faker;

$factory->define(App\Projeto::class, function (Faker $faker) {

	$tempo = $faker->dateTime;
    return [
        'nome' => $faker->company,
        'id_prof' => function () {
			$count = App\Professor::get()->count();
        	return App\Professor::find(rand(1,$count));
        }
    ];
});
