<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'subject' => 'required|min:5|max:50',
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => 'Поле тема является обязательным',
            'subject.min' => 'Минимальное количество символов равно пяти'
        ];
    }
}
