<?php

namespace App\Http\Requests\Message;

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
            'author' => 'nullable|integer|exists:profiles,id',
            'chat' => 'nullable|string|max:255',
            'content' => 'nullable|string|min:2|max:255',
        ];
    }

    protected function passedValidation()
    {
        return $this->merge([
            'profile_id' => $this->author
        ]);
    }
}
