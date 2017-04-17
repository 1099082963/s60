<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRegisterRequest extends FormRequest
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
            'phone' => 'required|unique:authorInformation,phone|min:11|max:11',
            'qq' => 'required|unique:authorInformation,QQ',
            'email' => 'required|email',
            'accept'=>'accepted',
        ];
    }
    public function messages(){
        return [
            'name.required' => '用户名不能为空',
            'phone.required' => '手机号码不能为空',
            'phone.unique' => '手机号码已使用',
            'phone.min' => '手机号码长度不正确',
            'phone.max' => '手机号码长度不正确',
            'qq.required' => 'QQ号码不能为空',
            'qq.unique' => 'QQ号码已使用',
            'email.required' => '邮箱不能为空',
            'email.email'=>'邮箱格式不正确',
            'accept.accepted'=>'请阅读并接受协议',
        ];
    }
}
