<?php

class Subkegiatan extends \Eloquent {

	protected $table = 'subkegiatan';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function indikator()
	{
		return $this->belongsTo('Indikator');
	}

}