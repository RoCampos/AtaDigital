<?php

use Illuminate\Database\Seeder;

class ProcessoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Processo::class, 50)
        	->create()
            ->each(function($obj) {
                $v = rand(1,App\Tecnico::count());
                $obj->id_tec = 
                    App\Tecnico::find($v)->id;
                $obj->save();
            });
    }
}
