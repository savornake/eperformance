<?php

class RKT extends \Eloquent {

	protected $table = 'rkts';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}