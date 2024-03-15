<?php

namespace App\Http\Controllers;

use Domain\Airline\Actions\DeleteAirlineAction;

class DeleteAirlineController extends Controller
{
    public function __invoke(DeleteAirlineAction $deleteAirlineAction, $airlineId)
    {
        $deleteAirlineAction->execute($airlineId);
    }
}
