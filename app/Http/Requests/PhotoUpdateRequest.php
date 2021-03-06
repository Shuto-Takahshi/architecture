<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoUpdateRequest extends FormRequest
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
            'title' => 'required|max:50',
            'body' => 'max:1000',
            'address' => 'required',
        ];
    }

    public function attributes()
    {
        return[
            'title' => 'タイトル',
            'body' => 'ストーリー',
            'address' => '住所',
        ];
    }
}
