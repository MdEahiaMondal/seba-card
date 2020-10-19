<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OverseerRequest extends FormRequest
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
            'name' => 'required|max:255',
            'designation' => 'nullable|max:255',
            'phone' => 'nullable|max:255',
            'office_phone' => 'nullable|max:255',
            'email' => 'nullable|max:255',
            'batch_no' => 'nullable|max:255',
            'joining_date' => 'nullable|max:255',
            'photo' => 'nullable|mimes:jpg,jpeg,bmp,png|max:1024',
            'office_address' => 'nullable|max:255',
            'home_address' => 'nullable|max:255',
            'gender' => 'required|max:255',
        ];
    }
}
