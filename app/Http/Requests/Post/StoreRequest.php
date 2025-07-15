<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'description' => 'nullable|string',
            'author' => 'required|string|min:3|max:255',
            'tag' => 'nullable|string|min:3|max:255',
            'img_path' => 'required|string|min:3|max:255',
            'content' => 'nullable|string',
            'published_at' => 'nullable|date',
            'status' => 'required|boolean',
            'category' => 'nullable|string',
            'is_active' => 'required|boolean',
        ];
    }
}
