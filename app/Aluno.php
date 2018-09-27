<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var boolean
	 */
	public $timestamps = false;

	/**
	 * Aluno has one Projeto.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function projeto()
	{
		// hasOne(RelatedModel, foreignKeyOnRelatedModel = aluno_id, localKey = id)
		return $this->belongsTo(
			Projeto::class,
			'id_proj'
		);
	}

	/**
	 * Aluno belongs to Encaminhamentos.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function encaminhamentos()
	{
		// belongsTo(RelatedModel, foreignKey = encaminhamentos_id, keyOnRelatedModel = id)
		return $this->belongsToMany(
			Encaminhamento::class, 
			$table = 'alunos_encaminhamentos');
	}

	/**
	 * Aluno belongs to User.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(
			User::class,
			'id'
		);
	}

}
