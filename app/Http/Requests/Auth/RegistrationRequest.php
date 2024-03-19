<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function attributes(): array
    {
        return [
            'name' => 'имя пользователя',
            'email' => 'адрес электронной почты',
            'password' => 'пароль',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:6', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:8', 'max:50'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле :attribute обязательно для заполнения',
            'min' => 'Минимальная длина поля :attribute :min символов',
            'max' => 'Максимальная длина поля :attribute :max символов',
            'email' => 'Формат поля :attribute должно быть в формате эл.почты',
            'confirmed' => 'Поле :attribute должно быть подтверждено (не соответствует пароль и его подтверждение)',
        ];
    }
}
