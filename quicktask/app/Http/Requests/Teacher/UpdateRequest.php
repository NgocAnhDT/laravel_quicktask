<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'fullname' => 'required|string|min:2,fullname'.request()->id,
            'phone' => 'required|regex:/(0)[1-9]{9}/',
            'speciality_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'required',
            'fullname.string' => 'string',
            'fullname.min' => 'min',
            'phone.required' => 'required',
            'phone.regex' => 'regex',
            'speciality_id.required' => 'required',
        ];
    }
}
