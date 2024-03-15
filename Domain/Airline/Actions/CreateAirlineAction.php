<?php

namespace Domain\Airline\Actions;

use App\Models\Airline;

class CreateAirlineAction
{
    public function execute(array $data)
    {
        return Airline::create($data);
    }
}
