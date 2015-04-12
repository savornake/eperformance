<?php

class Indikator extends \Eloquent {
	protected $table = 'indikator';
	protected $fillable = [];

	public function sasaran()
	{
		return $this->belongsTo('Sasaran');
	}
}