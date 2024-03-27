<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'email' => ['required', 'email'],
            'content' => ['required', 'min:5', 'max:255']
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Поле эл.почты обязательно для заполнения',
            'email.email' => 'Поле должно быть в формате эл.почты',
            'content' => 'Поле сообщения должно быть заполнено, как минимум 5 символами. Но не более 255',
        ];
    }
}
