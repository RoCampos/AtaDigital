<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;


    /**
     * Professor has many
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projetos()
    {
        return $this->hasMany(
            Projeto::class, 
            'id_prof');
    }

    /**
     * Professor has many Atas.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function atas()
    {   	
    	return $this->hasMany(
            Ata::class, 
            'id_prof');
    }

    /**
     * Professor belongs to User.
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
