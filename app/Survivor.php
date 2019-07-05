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
    	'longitude',
    	'infected'
    ];

    /* business rules */
    // function getTotalPoints()
    // {
    //     return $this->items->pluck('points')->sum();
    // }

    /* relationships */
    public function items()
    {
    	return $this->hasMany(Item::class);
    }
}
