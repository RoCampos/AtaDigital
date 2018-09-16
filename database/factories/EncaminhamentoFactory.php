<?php

use Faker\Generator as Faker;

$factory->define(App\Encaminhamento::class, function (Faker $faker) {

	$count = App\Ata::count();
	$ata = App\Ata::find(rand(1, $count));
	$assunto = $ata->assunto;

	$tarefas = [
		'relatorio',
		'programar',
		'artigo',
		'tests',
		'pesquisa',
		'seminario',
		'controlador'
	];

    return [
        'assunto' => $assunto,
        'tarefa' => $tarefas[rand(0,count($tarefas)-1)],
        'id_ata' => $ata
    ];
});
