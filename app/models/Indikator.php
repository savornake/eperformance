<?php

class Indikator extends \Eloquent {
	
	protected $fillable = [];

	public function sasaran()
	{
		return $this->belongsTo('Sasaran');
	}
}