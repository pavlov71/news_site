<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RestorePasswordRequest extends FormRequest
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
            'email' => ['required', 'email', 'exists:users,email']
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле электронной почты обязательно для заполнение',
            'email' => 'Поле должно быть в формате электронной почты',
            'exists' => 'Пользователь с указанной электронной почтой отсутствует в системе',
        ];
    }
}
