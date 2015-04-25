<?php

class Realisasi extends \Eloquent {

	protected $table = 'realisasi';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function tapkin()
	{
		return $this->belongsTo('Tapkin');
	}
}