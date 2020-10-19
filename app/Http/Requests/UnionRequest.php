<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnionRequest extends FormRequest
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
            "name"    => "required|array|max:255",
            "web_link"    => "required|array|max:255",
            "name.*"  => "required|string|distinct|max:255",
            "web_link.*"  => "required|string|distinct|max:255",
        ];
    }

    public function messages()
    {

        $message = [
            'name.*.required' => 'The name field is required.',
            'name.*.array' => 'The name field must be an array',
            'name.*.distinct' => 'The name field must be unique',
            'name.*.max' => 'The name field less then 255 character',

            'web_link.*.required' => 'The web link field is required.',
            'web_link.*.array' => 'The web link field must be an array',
            'web_link.*.distinct' => 'The web link field must be unique',
            'web_link.*.max' => 'The web link field less then 255 character',
        ];

        return $message;
    }

}
