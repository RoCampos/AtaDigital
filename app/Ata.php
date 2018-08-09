<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ata extends Model
{
    //

    public function alunos()
    {
		return $this->hasOne('App\Aluno', 'id');    	
    }
}
