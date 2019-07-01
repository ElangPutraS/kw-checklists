<?php

namespace App\Http\Requests\Templates;

use Illuminate\Support\Facades\Validator;
use Urameshibr\Requests\FormRequest;

class Store extends FormRequest
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
            'data.attributes.name' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'data.attributes.name.required' => 'The name field is required.'
        ];
    }
}
