<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class blogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'     => 'required',
            'title_en'  => 'required',
            'desc'      => 'required',
            'image'     => 'image',
        ];
    }

    public function attributes(){
        return [
            'title'     => 'عنوان مقاله',
            'title_en'  => 'عنوان انگیلیسی مقاله',
            'desc'      => 'توضیحات مقاله',
            'image'     => 'تصویر مقاله',
        ];
    }
}
