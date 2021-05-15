<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CVFormRequest extends FormRequest
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
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'street_name' => 'required',
            'house_number' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'country' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fname.required' => 'The first name field is required.',
            'lname.required' => 'The last name field is required.'
        ];
    }
}
