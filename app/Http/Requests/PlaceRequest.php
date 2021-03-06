<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
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
            'name' => 'unique:places|alpha|max:20'
        ];
    }

    public function messages()
    {
        return [
            'unique' => 'Поле должно быть уникальным',
            'alpha' => 'Поле должно быть строковым и заполненным',
            'max' => 'Поле принимает максимум :max символов'
        ];
    }
}
