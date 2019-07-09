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

    public function show(Survivor $survivor)
    {
        $inventory = $this->inventory;
        
        $water = $inventory
            ->where('survivor_id', $survivor->id)
            ->where('item_id', 4)
            ->sum('amount');

        $food = $inventory
            ->where('survivor_id', $survivor->id)
            ->where('item_id', 3)
            ->sum('amount');

        $medication = $inventory
            ->where('survivor_id', $survivor->id)
            ->where('item_id', 2)
            ->sum('amount');

        $ammunition = $inventory
            ->where('survivor_id', $survivor->id)
            ->where('item_id', 1)
            ->sum('amount');

    	return response()->json([
    		'survivor' => $survivor->name,
            'water' => $water,
            'food' => $food,
            'medication' => $medication,
            'ammunition' => $ammunition,
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
