<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encaminhamento extends Model
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Encaminhamento has one Ata.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ata()
    {
    	return $this->belongsTo(
            Ata::class,
            'id_ata'
        );
    }

    /**
     * Encaminhamento belongs to Alunos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alunos()
    {
    	// belongsTo(RelatedModel, foreignKey = alunos_id, keyOnRelatedModel = id)
    	return $this->belongsToMany(Aluno::class, 
            $table = 'alunos_encaminhamentos');
    }
}
