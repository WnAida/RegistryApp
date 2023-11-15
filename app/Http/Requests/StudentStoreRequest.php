<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
            // 'user_id'=> 'required|numeric|exists:users,id',
            'name' => 'required|string',
            'email' => 'required|string|email|max:255|unique:students,email',
            'address' => 'required|string',
            'course' => 'required|string',
            // 'photo_path' => ['file|mimes:png,jpg,jpeg', 'max:1000', 'nullable'],
        ];
    }
}
