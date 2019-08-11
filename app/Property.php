<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
    	'name',
		'description',
		'price',
		'address',
		'city',
		'state',
		'zip',
		'country',
		'photo',
    ];
}
