<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'fullname' => 'required|string|min:2',
            'phone' => 'required|regex:/(0)[1-9]{9}/|unique:tachers',
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
            'phone.unique'=> 'unique',
            'speciality_id.required' => 'required',
        ];
    }
}
