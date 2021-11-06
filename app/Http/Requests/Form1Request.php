<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form1Request extends FormRequest
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
            'name' => 'required|max:100',
            'last_name'=> 'nullable|max:100',
            'email'=> 'required|email|max:100|unique:leads',
            'address' => 'nullable|max:255',
            'country' => 'nullable|max:100',
            'source' => 'nullable|max:100',
            'phone' => 'nullable|max:100',
            'cellphone' => 'nullable|max:100'
        ];
    }
}
