<?php

namespace App\Models;

class Allocation extends Eloquent {

	protected $table = 'allocations';
	public $timestamps = true;
	protected $fillable = array('prenom', 'alloc_mensuel', 'prise', 'nom', 'echeance', 'nbre_mois', 'montant_total', 'contre_partie_mensuel', 'contrepartie_etat');

	public function directions()
	{
		return $this->belongsTo('App\Models\Allocation');
	}

	public function entreprises()
	{
		return $this->belongsTo('App\Models\Allocation');
	}

}