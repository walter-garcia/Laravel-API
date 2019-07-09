<?php

namespace App\Http\Controllers\Api;

use App\Infection;
use App\Survivor;
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

    public function show(Survivor $survivor)
    {

        $infection_report = $this->infection->all();

        $infected_survivor = $infection_report
            ->where('infected', 1)
            ->where('survivor_id', $survivor->id)
            ->count();

        $infected = ($infected_survivor >= 3);
        
        return response()->json([
            'id' => $survivor->id,
            'survivor_name' => $survivor->name,
            'infected' => $infected
        ]);

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
