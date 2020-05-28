<?php

namespace App\Http\Requests;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class InstituteRegistrationRequest extends FormRequest
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
            'type'=>'required', 
            'institutename'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'min:7|required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed',
            'password_confirmation'=>'sometimes|required_with:password',
            
        ];
    }

    public function messages()
    {
        return[
            'password.regex'=>'Password must contains one capital character and one numeric',
        ];
    }
}
