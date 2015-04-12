<?php

class Sasaran extends \Eloquent {
	protected $table = 'sasaran';
	protected $fillable = [];

	public function indikator()
	{
		return $this->hasMany('Indikator');
	}
}