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
        
        for ($i = 0; $i < 30; $i++) {
            $user = factory(App\User::class)->create();
            $user->type = 'aluno';
            $user->save ();

            $c = App\Projeto::count();
            $projeto = App\Projeto::find(rand(1, $c));
                

            DB::table('alunos')->insert([
                'id' => $user->id,
                'matricula' => str_random(11),
                'id_proj' => $projeto->id
            ]);    
        }
        
    }
}
