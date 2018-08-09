<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
	public function atas()
	{
		return $this->hasMany('App\Ata');
	}

}
