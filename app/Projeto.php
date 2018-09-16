<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    
    /**
     * Projeto has one Professor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function professor()
    {
    	// hasOne(RelatedModel, foreignKeyOnRelatedModel = projeto_id, localKey = id)
    	return $this->hasOne(Professor::class, 'id');
    }

    /**
     * Projeto has many Atas.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function atas()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = projeto_id, localKey = id)
    	return $this->hasMany(Ata::class);
    }

    /**
     * Projeto has many Alunos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alunos()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = projeto_id, localKey = id)
    	return $this->hasMany(Aluno::class);
    }
}
