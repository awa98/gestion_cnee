<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Demandeur_profil extends Model{

	protected $table = 'demandeur_profils';
	public $timestamps = false;
	protected $fillable = array('demandeur_id','NOM_PROFIL','NIVEAU');

	public function demandeurs()
	{
		return $this->belongsToMany('App\Models\Demandeur_profil');
		// return $this->belongsToMany(Programme::class, 'demandeur_profils','demandeur_id','profil_id');
	}

	public function entreprises()
	{
		return $this->belongsToMany('App\Models\Demandeur_profil');
	}

   
    public function profils()
    {
        return $this->belongsToMany(Niveau::class,'demandeur_profils', 'demandeur_id', 'profil_id');
    }
}