<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserPass extends FormRequest
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
            'password'=>'required',
            'confirm_password'=>'in:'.$this->password,
        ];
    }
    public function messages()
    {
        return[
        
            'password.required'=>'Chưa Nhập Mật Khẩu',
            'confirm_password.in'=>'Mật Khẩu Xác nhận Không Đúng',
        ];
    }
}
