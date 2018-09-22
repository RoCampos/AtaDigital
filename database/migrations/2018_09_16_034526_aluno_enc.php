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
            
            $table->unsignedInteger('aluno_id');
            $table->unsignedInteger('encaminhamento_id');

            $table->primary (['aluno_id', 'encaminhamento_id']);

            $table->foreign ('aluno_id')
                ->references ('id')
                ->on('alunos');

            $table->foreign ('encaminhamento_id')
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
