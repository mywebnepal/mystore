<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class hotelValidation extends FormRequest
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
            'name' =>'required|min:4',
            'type' => 'required',
            'city' => 'required',
            'address' => 'required|min:7',
            'phone'   => 'required|unique:hotels',
            'desc'    => 'required|min:10'
        ];
    }
}
