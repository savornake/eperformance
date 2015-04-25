<?php

class Rincian extends \Eloquent {

	protected $table = 'rincian';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function anggaran()
	{
		return $this->belongsTo('Anggaran');
	}

}