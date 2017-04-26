<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminAuthorInfoRequest extends FormRequest
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
            'phone'=>'required|min:11|max:11',
        ];
    }
    public function messages()
    {
        return  [
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确',
//            'phone.unique' => '手机号码已使用',
            'phone.max' => '手机号码长度不正确',
            'phone.min' => '手机号码长度不正确',
        ];
    }
}
