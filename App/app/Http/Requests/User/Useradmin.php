<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class Useradmin extends FormRequest
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
            'email'=>'required|unique:users|email',
            'password'=>'required',
            'confirm_password'=>'in:'.$this->password
        ];
    }
    public function messages()
    {
        return[
            'email.email'=>'Email Không Đúng định dạng',
            'email.required'=>'Email Không Được Để Rỗng',
            'email.unique'=>"$this->email Đã Tồn Tại Vui Lòng Nhập Email Khác ",
            'password.required'=>'Mật khẩu Không Được Để Rỗng',
            'confirm_password.in'=>'Mật Khẩu Xác nhận Không Đúng',
        ];
    }
}
