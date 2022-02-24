<?php

namespace App\Http\Requests\Checkout;

use Illuminate\Foundation\Http\FormRequest;

class addCheckout extends FormRequest
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
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Tên Không Được Để Rỗng',
            'email.email'=>'Email Không Đúng định dạng',
            'email.required'=>'Email Không Được Để Rỗng',
            'phone.required'=>'Phone Không Được Để Rỗng',
            'address.required'=>'Địa Chỉ Không Được Để Rỗng',
        ];
    }
}
