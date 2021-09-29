<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateType extends FormRequest
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
            'vehicle_types_nm' => 'required|unique:vehicle_types',
        ];
    }

    public function messages()
    {
        return [
            'vehicle_types_nm.required' => 'Please Enter Vehicle Type',
            'vehicle_types_nm.unique' => 'Vehicle Type Have Already Been Added',
        ];
    }
}
