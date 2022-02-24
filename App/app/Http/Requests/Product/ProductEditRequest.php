<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
            'cate_id'=>'required',
            'brand_id'=>'required',
            'avata'=>'image',
            'price'=>'required',
            'sale'=>'nullable|numeric|min:0|max:99',
            'stock'=>'required|array',
            'stock.*.*'=>'required|numeric|integer|min:0',
            'attr_label'=>'required|array',
            'attr_label.*'=>'required',
            'attr_name'=>'required|array',
            'attr_name.*.*'=>'required',
            'attr_val'=>'required|array',
            'attr_val.*.*'=>'required',
            // 'attr_img'=>'required|array',
            // 'attr_img.*.*'=>'required|image',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please fill name',
            'avata.image' => 'Avata must br an image',
            'cate_id.required' => 'Please fill category',
            'brand_id.required' => 'Please fill brand',
            //stock
            'stock.required' => 'A version stock was not provided ',
            'stock.*.*.required' => 'A version stock was not provided ',
            'stock.*.*.numeric' => 'A version stock must be number and integer ',
            'stock.*.*.integer' => 'A version stock must be number and integer ',
            'stock.*.*.min' => 'A version stock must be greater or equal to 0 ',
            //price
            'price.required' => 'Price was not provided ',
            'price.numeric' => 'Price must be number ',
            'price.min' => 'Price must be greater than 0 ',
            
            //sale prive
            'sale.numeric' => 'A version sale price must be number ',
            'sale.min' => 'A version sale price be greater or equal than 0 ',
            'sale.max' => 'A version sale price be smaller than 100 ',
            //attr label
            'attr_label.required' => 'A version name was not provided ',
            'attr_label.*.required' => 'A version name was not provided ',
            //attr name
            'attr_name.required' => 'An Attribute name was not provided ',
            'attr_name.*.*.required' => 'An Attribute name was not provided ',
            //attr val
            'attr_val.required' => 'An Attribute value was not provided ',
            'attr_val.*.*.required' => 'An Attribute value was not provided ',

            //attr_img
            // 'attr_img.required' => 'Must provide a picture for each version',
            // 'attr_img.*.*.required' => 'Must provide a picture for each version',
            // 'attr_img.*.*.image' => 'File must be picture'
        ];
    }
}
