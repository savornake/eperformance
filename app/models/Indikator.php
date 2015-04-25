<?php

class Indikator extends \Eloquent {

	protected $table = 'indikator';

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

	public function subkegiatan()
	{
		return $this->hasMany('Subkegiatan');
	}

	public function renstra()
	{
		return $this->belongsTo('Renstra');
	}

	public function tapkin()
	{
		return $this->belongsTo('Tapkin');
	}

}