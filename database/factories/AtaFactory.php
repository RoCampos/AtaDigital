<?php

use Faker\Generator as Faker;

$factory->define(App\Ata::class, function (Faker $faker) {
    $tempo = $faker->date;
    return [
    	
    	'assunto' => $faker->sentence(4, true),
    	'relatorio' => $faker->realText(100),
    	'id_prof' => function(){
    		$count = App\Professor::get()->count();
    		return App\Professor::find(rand(1, $count));
    	},
    	'id_proj' => function(){
    		$count = App\Projeto::get()->count();
    		return App\Projeto::find(rand(1, $count));
    	},
        'created_at' => $tempo,
        'updated_at' => $tempo
    ];
});
