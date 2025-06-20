<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|string|min:3|max:255',
            'description' => 'nullable|string',
            'author' => 'nullable|string|min:3|max:255',
            'tag' => 'nullable|string|min:3|max:255',
            'img_path' => 'nullable|string|min:3|max:255',
            'content' => 'nullable|string',
            'published_at' => 'nullable|date',
            'status' => 'nullable|boolean',
            'category' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ];
    }
}
