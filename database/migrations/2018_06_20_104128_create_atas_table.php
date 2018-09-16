<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //o coordenador pode ser substituído
        //por isso manter id_prof e id_proj
        Schema::create('atas', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('assunto');
            $table->string ('relatorio');
            $table->unsignedInteger ('id_prof');
            $table->unsignedInteger ('id_proj');
            
            $table->foreign ('id_prof')
                ->references ('id')
                ->on('professors');

            $table->foreign ('id_proj')
                ->references ('id')
                ->on('projetos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atas');
    }
}
