<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infection extends Model
{
	protected $fillable = [
		'infected',
		'survivor_id'
	];

    public function isInfected()
    {
    	return $this->hasMany('App\Survivor', 'id');
    }
}
