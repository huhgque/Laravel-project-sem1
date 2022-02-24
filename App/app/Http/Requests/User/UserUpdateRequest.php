<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'conf_password'=>'in:'.$this->password,
            'avata'=>'image'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên không được để trống',
            'phone.required'=>'Số điện thoại không được để trống',
            'address.required'=>'Địa chỉ không được để trống',
            'conf_password.in'=>'Mật khẩu xác nhận không chính xác',
            'avata.image'=>'Avata phải là định dạng ảnh'
        ];
    }
}
