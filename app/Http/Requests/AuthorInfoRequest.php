<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorInfoRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|min:11|max:11',
            'qq' => 'required',
            'email' => 'required|email',
        ];
    }
    public function messages(){
        return [
            'name.required' => '用户名不能为空',
            'phone.required' => '手机号码不能为空',
            'phone.min' => '手机号码长度不正确',
            'phone.max' => '手机号码长度不正确',
            'qq.required' => 'QQ号码不能为空',
            'email.required' => '邮箱不能为空',
            'email.email'=>'邮箱格式不正确',
        ];
    }
}
