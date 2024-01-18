<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required','string','max:255'],
            'photo'=>['required','image','mimes:jpg,png,jpeg,gif'],
            'description'=>['required','string','min:10'],
            'price'=>['required','string','max:255'],
            'type'=>['required'],
            'estimate'=>['required'],
        ];
    }
}
