<?php

namespace App\Http\Controllers\Api;

use App\Survivor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurvivorsController extends Controller
{
    private $survivor;

    public function __construct(Survivor $survivor)
    {
    	$this->survivor = $survivor;
    }

    public function index()
    {
    	return response()->json($this->survivor->paginate(10));
    }

    public function show(Survivor $id)
    {
    	$survivor = $this->survivor->find($id);

    	$data = ['data' => $survivor];

    	return response()->json($data);
    }

    public function store(Request $request)
    {
    	$survivorData = $request->all();
    	$this->survivor->create($survivorData);

    	return response()->json(['msg' => 'Survivor Information Created Successfully', 'code' => 201]);
    }

    public function update(Request $request, Survivor $id)
    {
    	$data = $request->all();
    	$id->update($data);

    	return response()->json(['msg' => 'Survivor Information Updated Successfully', 'code' => 201]);
    }

    public function delete(Survivor $id)
    {
    	$id->delete();

    	return response()->json(['msg' => 'Survivor (' . $id->name . ') Deleted Successfully', 'code' => 200]);
    }
}
