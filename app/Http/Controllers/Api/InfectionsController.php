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

    public function __construct(Infection $infection, Survivor $survivor)
    {
        $this->infection = $infection;
    }

    public function show(Survivor $survivor, Infection $infection)
    {
        $infection_report = $this->infection->all();

        $infected_survivor = $infection_report
            ->where('infected', 1)
            ->where('survivor_id', $survivor->id)
            ->count();

        $infected = ($infected_survivor >= 3);

        $total_survivor = $survivor
            ->all()
            ->where('id')
            ->count();

        return response()->json([
            'Survivor' => $survivor->name,
            'infected' => $infected,
            'total_survivor' => $total_survivor
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
