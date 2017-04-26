<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editBooksRequest extends FormRequest
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
            'newrollname'=>'required|min:3|max:10',
            'newchaptername'=>'required|min:3|max:10',
            'site'=>'required',
        ];
    }

    public function messages()
    {
        return  [
            'newrollname.required' => '卷名不能为空',

            'newrollname.min' => '卷名最少3个字',
            'newrollname.max' => '卷名不超过10个字',

            'newchaptername.required' => '章节名不能为空',
            'newchaptername.min' => '章节名最少3个字',
            'newchaptername.max' => '章节名不超过10个字',
            'site.required' => '内容不能为空',

        ];
    }
}
