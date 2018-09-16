<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlunoEnc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos_encaminhamentos', function (Blueprint $table) {
            
            $table->unsignedInteger('id_aluno');
                
            $table->unsignedInteger('id_enc');

            $table->primary (['id_aluno', 'id_enc']);

            $table->foreign ('id_aluno')
                ->references ('id')
                ->on('alunos');

            $table->foreign ('id_enc')
                ->references ('id')
                ->on('encaminhamentos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos_encaminhamentos');
    }
}
