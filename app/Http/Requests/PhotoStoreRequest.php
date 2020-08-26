<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoStoreRequest extends FormRequest
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
            'photo_image' => 'required',
            'title' => 'required|max:50',
            // 'body' => 'max|'
            'address' => 'required',
        ];
    }

    public function attributes()
    {
        return[
            'photo_image' => '写真',
            'title' => 'タイトル',
            'address' => '住所',
        ];
    }

}
