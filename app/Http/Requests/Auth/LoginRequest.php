<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    use AuthAttribute;
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
            'email' => ['required', 'string', 'email', 'max:255', 'exists:users,email'],
            'password' => ['required', 'string', 'min:8', 'max:50'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле :attribute обязательно для заполнения',
            'min' => 'Минимальная длина поля :attribute :min символов',
            'max' => 'Максимальная длина поля :attribute :max символов',
            'email' => 'Формат поля :attribute должно быть в формате эл.почты',
            'exists' => 'Пользователь с указанным e-mail отсутствует',
        ];
    }
}
