<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
    	'survivor_id',
    	'item_id',
    	'amount'
    ];

    public function inventory()
    {
    	return $this->belongsTo('App\Survivor', 'id');
    }
}
