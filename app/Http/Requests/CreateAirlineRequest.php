<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAirlineRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|unique:airlines,name|string',
            'description' => 'required|string'
        ];
    }
}
