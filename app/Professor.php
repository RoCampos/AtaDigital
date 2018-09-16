<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    
    /**
     * Professor has many Projetos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projetos()
    {
    	return $this->hasMany(Projeto::class);
    }

    /**
     * Professor has many Atas.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function atas()
    {
    	
    	return $this->hasMany(Ata::class);
    }
}
