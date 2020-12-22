<?php

namespace App\Models;

class Contrat extends Eloquent {

	protected $table = 'contrats';
	public $timestamps = true;
	protected $fillable = array('duree', 'date_debut', 'date_fin');

	public function entreprises()
	{
		return $this->hasMany('App\Models\Contrat');
	}

}