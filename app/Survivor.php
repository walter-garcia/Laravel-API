<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survivor extends Model
{
    protected $fillable = [
    	'name',
    	'age',
    	'gender',
    	'latitude',
    	'longitude',
    	'infected',
    	'infection_cases',
    ];

    /* business rules */
    function getTotalPoints()
    {
        return $this->items->pluck('points')->sum();
    }

    /* relationships */
    public function items()
    {
    	return $this->hasMany(Item::class);
    }
}
