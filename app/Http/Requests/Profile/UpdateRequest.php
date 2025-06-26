<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
//    public function authorize(): bool
//    {
//        return false;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'nullable|string|min:2|max:144',
            'surname' => 'nullable|string|min:2|max:144',
            'birthday_at' => 'nullable|date_format:Y-m-d',
            'description' => 'nullable|string|min:2|max:144',
            'phone' => 'nullable|string|min:9|max:20',
            'address' => 'nullable|string',
            'login' => 'nullable|string|min:5|max:144',
        ];
    }
}
