<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeUserInfoRequest extends FormRequest
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
            'personal'=>'max:25',
            'character'=>'max:25',

        ];
    }
    public function messages()
    {
        return  [
            'name.required' => '用户名不能为空',
            'name.min' => '用户名至少六位',
            'personal.max'=>'不可超过25字',
            'character.max'=>'不可超过25字'
        ];
    }
}
