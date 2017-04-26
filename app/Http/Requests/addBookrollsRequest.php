<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addBookrollsRequest extends FormRequest
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
            'bookrollsname'=>'required|min:3|max:10|unique:bookrolls,bookrollsname',
            'desc'=>'max:255',
            'chapterssum'=>'required|min:1',
        ];
    }
    public function messages()
    {
        return  [
            'bookrollsname.required' => '卷名不能为空',
            'bookrollsname.unique' => '卷名已有',
            'bookrollsname.min' => '卷名最少3个字',
            'bookrollsname.max' => '卷名不超过10个字',


            'chapterssum.required' => '章节数不能为空',
            'chapterssum.min' => '章节数最少1章',

            'desc.max'=>'描述不超过255个字'
        ];
    }
}
