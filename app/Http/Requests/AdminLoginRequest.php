<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'email' => ['required', 'email', 'exists:admin_users'],
            'password' => ['required', 'string', 'min:8', 'max:50']
        ];
    }
    public function messages(): array
    {
        return [
            'required' => 'Поле :attribute обязательно для заполнения',
            'min' => 'Минимальная длина поля :attribute :min символов',
            'max' => 'Максимальная длина поля :attribute :max символов',
            'email' => 'Формат поля :attribute должно быть в формате эл.почты',
            'exists' => 'Администратор с указанным e-mail отсутствует',
        ];
    }

}
