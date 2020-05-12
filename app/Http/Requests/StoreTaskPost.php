<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 変更：認証のチェックをしない
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // 変更ルールの追加
        return [
            'name' => 'required|max:100',
            'deadline' => 'required',
            'detail' => 'required',
        ];
    }
}
