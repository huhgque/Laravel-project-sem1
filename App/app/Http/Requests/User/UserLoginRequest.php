<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'email.email'=>'Email Không Đúng định dạng',
            'email.required'=>'Email Không Được Để Rỗng',
            'password.required'=>'Mật khẩu Không Được Để Rỗng',
        ];
    }
}
