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
            'author' => 'required|integer|exists:profiles,id',
            'tag' => 'nullable|string|min:3|max:255',
            'img_path' => 'nullable|string|min:3|max:255',
            'content' => 'nullable|string',
            'published_at' => 'nullable|date',
            'status' => 'required|boolean',
            'category_id' => 'required|integer|exists:categories,id',
            'is_active' => 'required|boolean',
        ];
    }

    protected function passedValidation()
    {
        return $this->merge([
            'profile_id' => $this->author
        ]);
    }
}
