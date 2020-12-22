<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Demandeur extends Model {

	protected $table = 'demandeurs';
	public $timestamps = false;
	protected $fillable = array('NOM','PRENOM','SEXE','DATE','region','ADRESSE','TEL','EMAIL');

	public function directions()
	{
		return $this->belongsTo('App\Models\Demandeur');
	}

	public function entreprises()
	{
		return $this->belongsTo('App\Models\Demandeur');
	}

	public function profils()
	{
		return $this->belongsToMany('App\Models\Demandeur');
	}

}
