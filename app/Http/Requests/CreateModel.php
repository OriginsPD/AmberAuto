<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateModel extends FormRequest
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
            'vehicle_model_nm' => 'required|unique:vehicle_models',
            'year' => 'required',
            'vehicle_nm' => 'required|alpha_num|unique:vehicle_models',
            'vehicle_types_id' => 'required',
            'brand_id' => 'required',
            'mileage' => 'required|numeric|min:5',
            'capacity' => 'required',
            'driver_side' => 'required',
            'color' => 'required',
            'cost' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'vehicle_model_nm.required' => 'Please Enter The Model Number',
            'vehicle_model_nm.unique' => 'Vehicle Model Already Exists',
            'year.required' => 'Please Enter The Vehicle Year',
            'vehicle_nm.required' => 'Please Enter Vehicle ID',
            'vehicle_nm.unique' => 'Vehicle ID Already Exists',
            'vehicle_types_id.required' => 'Select Vehicle Type',
            'brand_id.required' => 'Select The Brand',
            'mileage.required' => 'Please Enter The Mileage On The Vehicle',
            'capacity.required' => 'Please Enter Vehicle Capacity',
            'driver_side.required' => 'Select The Driver Side',
            'color.required' => 'Enter The Vehicle Color',
            'cost.required' => 'Please Enter The Cost Of Vehicle',
        ];
    }
}
