<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
            'name'=>'required|min:6',
            'email'=>'required|email',
            'phone'=>'required|min:11|max:11',
        ];
    }
    public function messages()
    {
        return  [
            'name.required' => '用户名不能为空',
            'name.min' => '用户名至少六位',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确',
            'phone.unique' => '手机号码已使用',
            'phone.max' => '手机号码长度不正确',
            'phone.min' => '手机号码长度不正确',
        ];
    }
}
