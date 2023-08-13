<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzasRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'pizza-name' => 'required|min:6|max:255',
            'extra' => 'required|min:6|max:255',
            'size' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|exists:categories,id',
            'pic' => 'mimes:jpg,bmp,png'
        ];
    }
}
