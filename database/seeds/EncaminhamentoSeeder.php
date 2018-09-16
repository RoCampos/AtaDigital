<?php

use Illuminate\Database\Seeder;

class EncaminhamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Encaminhamento::class,100)
        	->create()
        	->each(function($enc) {

        		$alunos = App\Aluno::all()
        			->random(rand(1,3));
        			// ->toArray();

        		$enc->alunos()->saveMany ($alunos);

        	});
    }
}
