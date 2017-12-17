<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class brandValidation extends FormRequest
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
            'name'  =>'required|min:3|max:100',
            'slug'  => 'required|min:3|max:60',
            'brand_logo'  =>'image|mimes:jpeg,png,jpg,gif,svg|max:2548'
        ];
    }
}
