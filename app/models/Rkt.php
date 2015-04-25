<?php

class Rkt extends \Eloquent {

	protected $table = 'rkt';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function anggaran()
	{
		return $this->hasMany('Anggaran');
	}

	public function biro()
	{
		return $this->belongsTo('Biro');
	}

	public function indikator()
	{
		return $this->hasMany('Indikator');
	}

}