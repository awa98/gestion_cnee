<?php

namespace App\Models;

class Adhesion extends Eloquent {

	protected $table = 'adhesions';
	public $timestamps = true;
	protected $fillable = array('fichier_reg_commerce', 'fichier_demande');

	public function directions()
	{
		return $this->belongsTo('App\Models\Adhesion');
	}

	public function entreprises()
	{
		return $this->belongsTo('App\Models\Adhesion');
	}

}