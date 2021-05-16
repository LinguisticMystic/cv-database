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
            'country' => 'required',

            'school' => 'required|array',
            'school.*' => 'required',
            'degree' => 'required|array',
            'degree.*' => 'required',
            'major' => 'required|array',
            'major.*' => 'required',
            'education_start_date' => 'required|array',
            'education_start_date.*' => 'required',

            'company' => 'required|array',
            'company.*' => 'required',
            'job_title' => 'required|array',
            'job_title.*' => 'required',
            'work_start_date' => 'required|array',
            'work_start_date.*' => 'required',
            'description' => 'required|array',
            'description.*' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fname.required' => 'The first name field is required.',
            'lname.required' => 'The last name field is required.',

            'school.*.required' => 'The school field is required.',
            'degree.*.required' => 'The degree field is required.',
            'major.*.required' => 'The major field is required.',
            'education_start_date.*.required' => 'The education start date field is required.',

            'company.*.required' => 'The company field is required.',
            'job_title.*.required' => 'The job title field is required.',
            'work_start_date.*.required' => 'The work start date field is required.',
            'description.*.required' => 'The description field is required.'
        ];
    }
}
