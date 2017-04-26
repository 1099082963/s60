<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addBookCurrentchaptersRequest extends FormRequest
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
            'bookchaptersname'=>'required|min:3|max:10|unique:chapters,chaptersname',

        ];
    }

    public function messages()
    {
        return  [

            'bookchaptersname.required' => '章节名不能为空',
            'bookchaptersname.min' => '章节名最少3个字',
            'bookchaptersname.max' => '章节名不超过10个字',
            'bookchaptersname.unique' => '章节名已有',


        ];
    }
}
