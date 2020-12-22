<?php

namespace App\Models;

class Direction extends Eloquent {

	protected $table = 'directions';
	public $timestamps = true;
	protected $fillable = array('nom', 'prenom', 'matricule');

	public function adhesions()
	{
		return $this->hasMany('App\Models\Direction');
	}

	public function allocations()
	{
		return $this->hasMany('App\Models\Direction');
	}

	public function demandeurs()
	{
		return $this->hasMany('App\Models\Direction');
	}

}