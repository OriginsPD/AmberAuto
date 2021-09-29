<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBrand extends FormRequest
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
            'brand_nm' => 'required|unique:brands',
            'brand_desc' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'brand_nm.required' => 'Please Enter Brand Name',
            'brand_nm.unique' => 'Brand Has Already been Added',
            'brand_desc.required' => 'Please Add Some Description To the Brand',
            'brand_desc.max' => 'Description Must Not Be Over 25 Characters Long'
        ];
    }
}
