<?php

namespace App\Actions;

use App\DTO\UserCreateDTO;
use App\Models\User;

class UserCreateAction
{
    public function __invoke(UserCreateDTO $DTO): User
    {
        return User::create($DTO->getData());
    }
}
