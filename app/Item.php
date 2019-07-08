<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
    	'survivor_id',
    	'item',
    	'points'
    ];

    public function survivor()
    {
    	return $this->belongsTo('App\Survivor', 'id');
    }
}
