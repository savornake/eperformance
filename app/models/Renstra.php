<?php

class Renstra extends \Eloquent {

	protected $table = 'renstra';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function indikator()
	{
		return $this->hasMany('Indikator');
	}
}