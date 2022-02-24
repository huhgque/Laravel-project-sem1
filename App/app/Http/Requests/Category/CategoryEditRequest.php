<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryEditRequest extends FormRequest
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
            'name'=> [
                'required',
                Rule::unique('categories','name')->ignore($this->id)
            ],
            'catemini'=>'required'

        ];
    }
    public function messages(){
        return [
            'name.required' => 'Category Name không được để rỗng ',
            'name.unique' => "$this->name đã tồn tại",
            'catemini.required' => 'Chọn ít nhất một Sub Category '

        ];

    }
}
