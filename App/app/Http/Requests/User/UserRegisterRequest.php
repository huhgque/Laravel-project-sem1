<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'email'=>'required|unique:users|email',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required',
            'confirm_password'=>'in:'.$this->password,
            'image'=>'image'
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Tên Danh Mục Không Được Để Rỗng',
            'email.email'=>'Email Không Đúng định dạng',
            'email.required'=>'Email Không Được Để Rỗng',
            'email.unique'=>"$this->email Đã Tồn Tại Vui Lòng Nhập Email Khác ",
            'phone.required'=>'Phone Không Được Để Rỗng',
            'address.required'=>'Địa Chỉ Không Được Để Rỗng',
            'password.required'=>'Mật khẩu Không Được Để Rỗng',
            'confirm_password.in'=>'Mật Khẩu Xác nhận Không Đúng',
            'image.image'=>'Avata phải là định dạng ảnh'
        ];
    }
}
