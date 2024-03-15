<?php

namespace Domain\Airline\Actions;

use App\Models\Airline;

class GetAirlineAction
{
    public function execute()
    {
        $airlines = Airline::paginate(10);

        return view('airline', ['airlines' => $airlines]);
    }
}
