<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPassRequest extends FormRequest
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
            'password' => 'required|confirmed',
            'password_confirmation' =>'required',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => '密码不能为空',
            'password.confirmed' => '两次密码不一致',
            'password_confirmation.required' => '确认密码不能为空',
        ];
    }
}
