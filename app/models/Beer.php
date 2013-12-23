<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Beer extends Eloquent {
    public $timestamps = false;
	
	public static $rules = array(
	    'name' => 'required',
	    'brewery' => 'required',
		'volume' => 'required|numeric',
		'alcohol' => 'required|numeric',
		'price' => 'required|numeric'
	);
}

