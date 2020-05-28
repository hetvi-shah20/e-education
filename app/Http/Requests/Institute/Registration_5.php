<?php

namespace App\Http\Requests\Institute;

use Illuminate\Foundation\Http\FormRequest;

class Registration_5 extends FormRequest
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
            
            'instituteaddress'=>'required',
            'state'=>'required',
            'city'=>'required',
            'email'=>'required|email|unique:main_registraions',
            'mobileno'=>'required',
            
        ];
    }
}
