<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survivor extends Model
{   
    protected $fillable = [
    	'name',
    	'age',
    	'gender',
    	'latitude',
    	'longitude'
    ];

    public function items()
    {
    	return $this->hasMany('App\Item', 'survivor_id');
    }
}
