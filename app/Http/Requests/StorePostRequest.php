<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;  //first you need to change it from false to true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:20'],
            'body' => ['required'],
        ];

        
    }
    public function messages(): array
{
    return [
        'title.required' => 'A title is required',
        'title.max' => 'Just 20 space',
        'body.required' => 'A body is required',
    ];
}
}
