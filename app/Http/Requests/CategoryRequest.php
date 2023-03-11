<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'          => 'required',
            'meta_desc'     => 'required',
            'meta_keywords' => 'required',
        ];
    }
    public function attributes(){
        return [
            'name'          =>'نام دسته',
            'meta_desc'     =>'توضیحات سئو',
            'meta_keywords' =>'کلمات کلیدی سئو',
        ];
    }
}
