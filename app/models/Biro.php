<?php

class Biro extends \Eloquent {

	protected $table = 'biro';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function rkt()
	{
		return $this->hasMany('Rkt');
	}

	public function tapkin()
	{
		return $this->hasMany('Tapkin');
		
	}

}