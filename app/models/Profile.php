<?php

class Profile extends \Eloquent {
	protected $fillable = [];

	public function user()
    {
        return $this->hasOne('User');
    }
}