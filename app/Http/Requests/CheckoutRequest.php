<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required',
            'confirm' => 'required',
            'present_city' => 'required',
            'description' => 'required',
            'delivery_city' => 'required',
        ];
    }
}
