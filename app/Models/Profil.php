<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model{

	protected $table = 'profils';
	public $timestamps = false;
	protected $fillable = array('NOMFILE','FILE');

	public function demandeurs()
	{
		return $this->belongsToMany('App\Models\Profil');
	}

	public function entreprises()
	{
		return $this->belongsToMany('App\Models\Profil');
	}

}