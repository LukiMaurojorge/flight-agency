<?php

namespace App\Http\Controllers;

use App\Http\Requests\AirlineDataRequest;
use App\Http\Requests\CreateAirlineRequest;
use Domain\Airline\Actions\CreateAirlineAction;

class CreateAirlineController extends Controller
{
    public function __invoke(CreateAirlineRequest $request, CreateAirlineAction $createAirlineAction)
    {
        $createAirlineAction->execute($request->validated());
    }
}
