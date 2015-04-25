<?php

class Anggaran extends \Eloquent {

	protected $table = 'anggaran';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function rkt()
	{
		return $this->belongsTo('Rkt');
	}

	public function rincian()
	{
		return $this->hasMany('Rincian');
	}

}