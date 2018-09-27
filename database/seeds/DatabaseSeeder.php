<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProfessorSeeder::class);
        $this->call(ProjetoSeeder::class);
        $this->call(AlunoSeeder::class);
        $this->call(AtaSeeder::class);
        $this->call(EncaminhamentoSeeder::class);
        $this->call(TecnicoSeeder::class);
        $this->call(ProcessoSeeder::class);
        
    }
}
