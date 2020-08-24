<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
            // 'image_path' => 'required',
            'photo_title' => 'required|max:50',
            // 'body' => 'max|'
            'address' => 'required',
        ];
    }

    public function attributes()
    {
        return[
            'image_path' => '写真',
            'title' => 'タイトル',
            'address' => '住所',
        ];
    }
}
