<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BishopRequest extends FormRequest
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
            'startPos' => ['required', 'regex:/^[a-h][1-8]$/'],
            'endPos' => ['required', 'regex:/^[a-h][1-8]$/'],
            'number' => 'required|integer|min:0',
        ];
    }
}
