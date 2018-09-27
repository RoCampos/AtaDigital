<?php

use Faker\Generator as Faker;

$factory->define(App\Tecnico::class, function (Faker $faker) {

	$funcao = [
		'secretario',
		'assistente',
		'faxineiro',
		'pedreiro',
		'vaqueiro',
		'programador',
		'dotô'
	];
    return [
        'nome' => $faker->name,
        'matricula' => 123,
        'funcao'=> $funcao[rand(0,6)]
    ];
});
