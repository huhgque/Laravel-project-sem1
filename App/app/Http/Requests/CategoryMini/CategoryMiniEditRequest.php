<?php

namespace App\Http\Requests\CategoryMini;

use Illuminate\Foundation\Http\FormRequest;

class CategoryMiniEditRequest extends FormRequest
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
            'name'=> 'required|unique:category_minis,name,' .$this->id,
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Category Mini Name không được để rỗng ',
            'name.unique' => "$this->name đã tồn tại"
        ];

    }
}
