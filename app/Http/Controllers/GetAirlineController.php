<?php

namespace App\Http\Controllers;

use Domain\Airline\Actions\GetAirlineAction;

class GetAirlineController extends Controller
{
    public function __invoke(GetAirlineAction $getAirlineAction)
    {
        return $getAirlineAction->execute();
    }
}
