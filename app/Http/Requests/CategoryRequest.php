<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $rules =  [
            'name' => 'required|max:255|min:3',
            'code' => 'required|numeric|min:3',
            'description' => 'required|min:6',
            'image' => 'mimes:jpg,png',
        ];
        if ($this->route()->named('admin.category.store')){
            $rules['image'] = 'required|mimes:jpg,png';
        }
        return $rules;
    }
}
