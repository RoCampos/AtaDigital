<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ata extends Model
{
    /*
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    public function professor()
    {
		return $this->hasOne('App\Professor', 'id');    	
    }

    /**
     * Ata has one Projeto.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function projeto()
    {
    	// hasOne(RelatedModel, foreignKeyOnRelatedModel = ata_id, localKey = id)
    	return $this->hasOne(Projeto::class, 'id');
    }

    /**
     * Ata has many Encaminhamentos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function encaminhamentos()
    {
        return $this->hasMany(Encaminhamento::class);
    }

}
