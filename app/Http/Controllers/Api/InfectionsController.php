<?php

namespace App\Http\Controllers\Api;

use App\Infection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InfectionRequest;

class InfectionsController extends Controller
{
    private $infection;

    public function __construct(Infection $infection)
    {
        $this->infection = $infection;
    }
    public function store(InfectionRequest $request)
    {
		$infectionData = $request->all();
    	
        $this->infection->create($infectionData);

    	return response()->json([
            'msg' => 'Infection Reported successfully',
            'code' => '200 - OK'
        ]);
    	
    }
}
