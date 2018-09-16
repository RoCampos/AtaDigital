<?php

use Faker\Generator as Faker;

$factory->define(App\Professor::class, function (Faker $faker) {

	$formacao = [
	'informatica', 
	'vestuario',
	'textil',
	'eletro'
	];

	$titulacao = [
		'graduacao',
		'mestrado',
		'doutorado'
	];

    return [
        'nome' => $faker->name,
        'formacao' => $formacao[rand(0,3)],
        'titulacao' => $titulacao[rand(0,2)],
        'email' => $faker->email,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,

    ];
});
