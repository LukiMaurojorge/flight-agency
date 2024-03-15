<?php

namespace Domain\Airline\Actions;

use App\Models\Airline;

class DeleteAirlineAction
{
    public function execute($airlineId)
    {
        return Airline::find($airlineId)->delete();
    }
}
