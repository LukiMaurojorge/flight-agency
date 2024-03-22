<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAirlineRequest;
use App\Models\Airline;
use Illuminate\Http\JsonResponse;

class UpdateAirlineController extends Controller
{
    public function __invoke(CreateAirlineRequest $request, Airline $airline): JsonResponse
    {
        $airline->update($request->validated());

        return response()->json($airline);
    }
}
