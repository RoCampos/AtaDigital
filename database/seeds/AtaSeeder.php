<?php

use Illuminate\Database\Seeder;

class AtaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ata::class, 100)
        	->create();
    }
}
