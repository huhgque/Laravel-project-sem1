<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
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
            'name'=> 'required|unique:categories,name',
            'catemini'=>'required'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên không được để rỗng ',
            'name.unique' => "$this->name đã tồn tại",
            'catemini.required' => 'Chọn ít nhất một Sub Category '
            
        ];

    }
}
