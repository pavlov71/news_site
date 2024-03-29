<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function attributes()
    {
        return [
            'title' => 'заголовок',
            'preview' => 'краткое описание',
            'description' => 'статья',
            'thumbnail' => 'обложка статьи',
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
            'title' => ['required', 'string', 'min:5', 'max:255',],
            'preview' => ['required', 'string', 'min:5', 'max:50',],
            'description' => ['required', 'string', 'min:50',],
            'thumbnail' => ['nullable', 'file', 'image']
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для заполнения',
            'min' => 'Поле :attribute не до конца заполнено',
            'max' => 'Превышено максимальная длина поля',
            'image' => 'выбранный файл не является изображением',
        ];
    }
}
