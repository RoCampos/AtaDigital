<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Processo belongs to Tecnico.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tecnico()
    {
    	return $this->hasOne(
            Tecnico::class);
    }

}
