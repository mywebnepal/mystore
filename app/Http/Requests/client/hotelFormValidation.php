<?php

namespace App\Http\Requests\client;

use Illuminate\Foundation\Http\FormRequest;

class hotelFormValidation extends FormRequest
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
            'name'  =>'required|min:6|max:60',
            'cities_id'  => 'required',
            'address'     => 'required|min:10|max:60',
            'phone'       => 'required|unique:hotels',
            'email'       => 'required|email|unique:hotels',
            'tel_phone'   => 'required|unique:hotels',
            'logo'  =>'image|mimes:jpeg,png,jpg,gif,svg|max:2548',
            'featured_img_1'  =>'image|mimes:jpeg,png,jpg,gif,svg|max:2548',
            'featured_img_2'  =>'image|mimes:jpeg,png,jpg,gif,svg|max:2548'
        ];
    }
}
