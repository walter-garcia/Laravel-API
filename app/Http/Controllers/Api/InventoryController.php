<?php

namespace App\Http\Controllers\Api;

use App\Survivor;
use App\Inventory;
use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InventoryRequest;

class InventoryController extends Controller
{
    private $inventory;

    public function __construct(Inventory $inventory, Survivor $survivor)
    {
        $this->inventory = $inventory;
    }

    public function show(Survivor $survivor, Item $item)
    {
        $inventory = $this->inventory;
        
        $water = $inventory
            ->where('survivor_id', $survivor->id)
            ->where('item_id', 4)
            ->sum('amount');

        $water_point = $item
            ->where('points', 4)
            ->count();

        $food = $inventory
            ->where('survivor_id', $survivor->id)
            ->where('item_id', 3)
            ->sum('amount');

        $food_point = $item
            ->where('points', 3)
            ->count();

        $medication = $inventory
            ->where('survivor_id', $survivor->id)
            ->where('item_id', 2)
            ->sum('amount');

        $medication_point = $item
            ->where('points', 2)
            ->count();

        $ammunition = $inventory
            ->where('survivor_id', $survivor->id)
            ->where('item_id', 1)
            ->sum('amount');

        $ammunition_point = $item
            ->where('points', 1)
            ->count();

    	return response()->json([
            ['survivor_id' => $survivor->id,
    		'survivor_name' => $survivor->name],
            ['water_amount' => $water,
            'water_points' => $water * ($medication_point * 4)],
            ['food_amount' => $food,
            'food_points' => $food * ($medication_point * 3)],
            ['medication_amount' => $medication,
            'medication_points' => $medication * ($medication_point * 2)],
            ['ammunition_amount' => $ammunition,
            'ammunition_points' => $ammunition * $ammunition_point]
        ]);
    }

    public function store(InventoryRequest $request)
    {
        $data = $request->all();
        
        $this->inventory->create($data);

        return response()->json([
            'msg' => 'Item information successfully added',
            'code' => '201 - Created'
        ]); 
    }
}
