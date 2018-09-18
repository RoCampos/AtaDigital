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

	$user = factory(App\User::class)->create();
	$user->type = 'professor';
	$user->save();
    return [
    	'id' => $user,
        'formacao' => $formacao[rand(0,3)],
        'titulacao' => $titulacao[rand(0,2)]
    ];
});
