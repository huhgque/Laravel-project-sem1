<?php

namespace App\Http\Requests\Brand;

use Illuminate\Foundation\Http\FormRequest;

class BrandAddRequest extends FormRequest
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
            'name'=> 'required|unique:brands',
            'image'=>'required'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Brand Name không được để rỗng ',
            'name.unique' => "$this->name đã tồn tại",
            'image.required' => 'Image Brand không được để rỗng'
        ];

    }
}
