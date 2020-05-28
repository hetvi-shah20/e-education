<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\User;
class AdminRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'min:7|required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed',
            'password_confirmation'=>'sometimes|required_with:password',
            'captcha'=>'required|captcha',
        ];

    }

    public function messages()
    {
        return[
            'name.required'=>'Your name can not be empty',
            'password.regex'=>'Password must contains one capital character and one numeric',
        ];
    }
}
