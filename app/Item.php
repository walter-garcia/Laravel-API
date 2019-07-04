<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    const TYPES = [
        [
            'item' => 'Water',
            'points' => 4
        [
            'item' => 'Food',
            'points' => 3
        ],
        [
            'item' => 'Medication',
            'points' => 2
        ],
        [
            'item' => 'Ammunition',
            'points' => 1
        ],
    ];

    protected $fillable = [
        'type'
    ];

    function getNameAttribute()
    {
        return self::TYPES[$this->type]['item'];
    }
    function getPointsAttribute()
    {
        return self::TYPES[$this->type]['points'];
    }

    public function survivor()
    {
    	return $this->belongsTo(Survivor::class);
    }
}
