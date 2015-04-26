<?php

class Renstra extends \Eloquent {

	protected $table = 'renstra';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'sasaran'	=> 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['sasaran','tujuan'];

	public function indikator()
	{
		return $this->hasMany('Indikator');
	}
}