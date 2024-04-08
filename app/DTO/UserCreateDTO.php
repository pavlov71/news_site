<?php

namespace App\DTO;

use Illuminate\Support\Facades\Hash;

class UserCreateDTO
{
    public function __construct(
        private readonly string $name,
        private readonly string $email,
        private readonly string $password
    )
    {
    }

    public function getData(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }
}
