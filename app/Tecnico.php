<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
	public function processos()
	{
		return $this->hasMany(
			Processo::class,
			'id_tec');
	}
}
