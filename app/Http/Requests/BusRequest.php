<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'            => 'required',
            'registration_id' => 'required',
            'type'            => 'required',
            'max_seats'       => 'required|integer',
            'start_point'     => 'required',
            'end_point'       => 'required',
            'start_time'      => 'required|date_format:H:i',
            'end_time'        => 'required|date_format:H:i',
        ];
    }
}
