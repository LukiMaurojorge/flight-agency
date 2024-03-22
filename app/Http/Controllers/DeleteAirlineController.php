<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\JsonResponse;

class DeleteAirlineController extends Controller
{
    public function __invoke(Airline $airline): JsonResponse
    {
        $airline->delete();

        return response()->json()->noContent();
    }
}
