<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('alunos')->insert([
                'nome' => str_random(15),
                'matricula' => str_random(11)
            ]);    
        }
        
    }
}
