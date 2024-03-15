<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAirlineRequest;
use App\Models\Airline;

class UpdateAirlineController extends Controller
{
    public function __invoke(CreateAirlineRequest $request, Airline $airline)
    {
        return $airline->update($request->validated());
    }
}
