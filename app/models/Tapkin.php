<?php

class Tapkin extends \Eloquent {

	protected $table = 'tapkin';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'biro_id'	=> 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['biro_id','sasaran'];

	public function biro()
	{
		return $this->belongsTo('Biro');
	}

	public function indikator()
	{
		return $this->hasMany('Indikator');
	}

	public function realisasi()
	{
		return $this->hasMany('Realisasi');
	}

}