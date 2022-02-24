<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class PaymentEditRequest extends FormRequest
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
            'name'=> 'required|unique:payments,name,' .$this->id,
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Payment không được để rỗng ',
            'name.unique' => "$this->name đã tồn tại"
        ];

    }
}
