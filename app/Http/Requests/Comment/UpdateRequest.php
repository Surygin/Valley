<?php

namespace App\Http\Requests\Comment;

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
            'author' => 'nullable|string|min:2|max:255',
            'content' => 'nullable|string',
            'like' => 'nullable|numeric',
            'post' => 'nullable|string|min:2|max:255',
            'parent' => 'nullable|string|min:2|max:255'
        ];
    }
}
