<?php

namespace App\Http\Requests\client;

use Illuminate\Foundation\Http\FormRequest;

class eventValidation extends FormRequest
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
            'event_title' => 'required|min:8|max:200',
            'event_city'  => 'required',
            'event_phone' => 'required',
            'event_start_date' => 'required',
            'event_end_date'   => 'required',
            'event_desc'       => 'required|min:10|max:6000',
            'event_featured_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2548',
            'event_ticket_type'  =>'required'
        ];
    }
}
