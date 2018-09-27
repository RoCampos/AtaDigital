<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->integer('id')
                ->unsigned ();
            $table->string('matricula');
            $table->integer('id_proj')
                ->unsigned ()
                ->nullable ();

            $table->primary ('id');

            $table->foreign ('id_proj')
                ->references ('id')
                ->on ('projetos');

            $table->foreign('id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
