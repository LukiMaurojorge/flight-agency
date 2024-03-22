<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Contracts\View\View;

class GetAirlinesController extends Controller
{
    public function __invoke(): View
    {
        $airlines = Airline::paginate(10);

        return view('airlines', [
            'airlines' => $airlines
        ]);
    }
}
