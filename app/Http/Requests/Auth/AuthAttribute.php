<?php

namespace App\Http\Requests\Auth;

trait AuthAttribute
{
    public function attributes(): array
    {
        return [
            'name' => 'имя пользователя',
            'email' => 'адрес электронной почты',
            'password' => 'пароль',
        ];
    }
}
