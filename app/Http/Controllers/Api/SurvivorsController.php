<?php

namespace App\Http\Controllers\Api;

use App\Inventory;
use App\Infection;
use App\Survivor;
use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SurvivorRequest;

class SurvivorsController extends Controller
{
    private $survivor;

    public function __construct(Survivor $survivor, Inventory $inventory, Infection $infection, Item $item)
    {
    	$this->survivor = $survivor;
        $this->item = $item;
        $this->inventory = $inventory;
        $this->infection = $infection;
    }

    public function index()
    {
        $data = $this->survivor->paginate(10);

    	return response()->json($data);
    }

    public function show(Survivor $survivor) 
    {
        return response()->json($survivor);
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
