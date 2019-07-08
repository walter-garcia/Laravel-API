<?php

namespace App\Http\Controllers\Api;

use App\Infection;
use App\Survivor;
use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SurvivorRequest;

class SurvivorsController extends Controller
{
    private $survivor;

    public function __construct(Survivor $survivor, Item $item, Infection $infection)
    {
    	$this->survivor = $survivor;
        $this->item = $item;
        $this->infection = $infection;
    }

    public function index()
    {
        $data = $this->survivor->paginate(5);

    	return response()->json([
            $data,
            'code' => '200 - OK'
        ]);
    }

    public function show(Survivor $survivor)
    {
        $item = $this->item;
        $survivor_items = $this->item->all();

        $water = $item->where('item', 'water')->where('survivor_id', $survivor->id)->where('survivor_id', $survivor->id)->count();
        $water_point = $item->where('item', 'water')->where('survivor_id', $survivor->id)->sum('points');

        $food = $item->where('item', 'food')->where('survivor_id', $survivor->id)->count();
        $food_point = $item->where('item', 'food')->where('survivor_id', $survivor->id)->sum('points');

        $medication = $item->where('item', 'medication')->where('survivor_id', $survivor->id)->count();
        $medication_point = $item->where('item', 'medication')->where('survivor_id', $survivor->id)->sum('points');

        $ammunition = $item->where('item', 'ammunition')->where('survivor_id', $survivor->id)->count();
        $ammunition_point = $item->where('item', 'ammunition')->where('survivor_id', $survivor->id)->sum('points');


        $infection_report = $this->infection->all();
        $infected_survivor = $infection_report->where('infected', true)->where('survivor_id', $survivor->id)->count();
        $infected = ($infected_survivor >= 3);

        // $infected_percentage = infected_survivor / 

    	return response()->json([
            'survivor' => $survivor,
            'water_amount' => $water,
            'water_points' => $water_point,
            'food_amount' => $food,
            'food_points' => $food_point,
            'medication_amount' => $medication,
            'medication_points' => $medication_point,
            'ammunition_amount' => $ammunition,
            'ammunition_points' => $ammunition_point,
            'is_infected' => $infected,
            // 'percentage_of_infected_survivors' => $infected_percentage
        ]);
    }
     
    public function store(SurvivorRequest $request)
    {
    	$survivorData = $request->all();
    	
        $this->survivor->create($survivorData);

    	return response()->json([
            'msg' => 'Survivor information successfully added',
            'code' => '201 - Created'
        ]);
    }

    public function update(Request $request, Survivor $id)
    {
    	$data = $request->only(['latitude', 'longitude']);

        if(! $data)
        {
            return response()->json([
                'msg' => 'A new Latitude or Longitude MUST be provided',
                'code' => '422 - Unprocessable Entity'
            ]);
        }

        $id->update($data);
        return response()->json([
            'msg' => 'Survivor Location Successfully Updated',
            'code' => '200 - Ok'
        ]);
    }

    public function delete(Survivor $id)
    {
    	$id->delete();

    	return response()->json([
            'msg' => 'Survivor (' . $id->name . ') Deleted Successfully',
            'code' => '200 - Ok'
        ]);
    }
}
