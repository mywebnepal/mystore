<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductsValidation extends FormRequest
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
            'name' => 'required|min:4|max:150',
            'categories_id'       =>'required',
            // 'price'               => 'interger',
            'featured_img'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_image '       =>'image|mimes:jpeg,png,jpg,gif,svg|max:2548',
            'quantity'             => 'required'
        ];
    }
}
