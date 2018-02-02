<?php

namespace App\Http\Requests\client;

use Illuminate\Foundation\Http\FormRequest;

class hotelUserValidation extends FormRequest
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
            'hotelName'     => 'required|min:7|max:60',
            'hotelAddress'  => 'required|min:10|max:60',
            'hotelTel'      => 'required|unique:hotel_users',
            'hotelPhone'    => 'required|unique:hotel_users'
        ];
    }
}
