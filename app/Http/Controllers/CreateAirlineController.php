<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAirlineRequest;
use App\Models\Airline;
use Illuminate\Http\JsonResponse;

class CreateAirlineController extends Controller
{
    public function __invoke(CreateAirlineRequest $request): JsonResponse
    {
        $airline = Airline::create($request->validated());

        return response()->json($airline, JsonResponse::HTTP_CREATED);
    }
}
