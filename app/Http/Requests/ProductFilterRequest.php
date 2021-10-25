<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFilterRequest extends FormRequest
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
            'min' => 'nullable|min:0|max:10000000',
            'max' => 'nullable|min:0|max:100000000',
        ];
    }
    public function messages()
    {
        return [
            'min.min' => 'Поле должно иметь численное значение',
            'max.min' => 'Поле должно иметь численное значение',
        ];
    }
}
