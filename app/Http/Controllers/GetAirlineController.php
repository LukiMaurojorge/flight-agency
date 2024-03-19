<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Contracts\View\View;

class GetAirlineController extends Controller
{
    public function __invoke(): View
    {
        $airlines = Airline::paginate(10);

        return view('airline', [
            'airlines' => $airlines
        ]);
    }
}
