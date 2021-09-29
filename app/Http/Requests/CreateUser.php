<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Full name is Required',
            'email.required' => 'Email is Required',
            'Password.required' => 'Please Create a Unique Password',
            'Password.confirmed' => 'Password Does Not Match',
        ];
    }
}
