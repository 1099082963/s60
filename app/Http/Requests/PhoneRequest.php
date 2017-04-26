<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhoneRequest extends FormRequest
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
            'phone'=>'required|unique:user,phone',
        ];
    }
    public function messages()
    {
        return [
            'phone.required' => '手机号码不能为空',
            'phone.unique'=>'手机号码已经被占用',
        ];
    }
}
