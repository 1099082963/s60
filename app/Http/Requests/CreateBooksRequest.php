<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBooksRequest extends FormRequest
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
            'booksName'=>'required|max:15',
            'author_name'=>'required|min:2|max:8',
            'price'=>'required|numeric|min:0',
            'desc'=>'required',
            'label'=>'required',
        ];
    }
    public function messages(){
        return [
            'booksName.required' => '书名不能为空',
            'booksName.max' => '书名不能超过15个字',
            'author_name.required' => '作者名不能为空',
            'author_name.min' => '最少2个字',
            'author_name.max' => '不能超过8个字',
            'price.required' => '书价不能为空',
            'price.numeric' => '必须是数字',
            'price.min' => '不能低于0元',
            'desc.required' => '描述不能为空',
            'label.required' => '标签不能为空',
        ];
    }
}
