<?php

namespace App\Actions;

use App\Jobs\UserRestorePasswordProcess;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RestoreAction
{
    public function __invoke(array $data)
    {
        $newPass = Str::random(10);
        $user = User::query()->whereEmail($data['email'])->firstOrFail();
        $user->update(['password' => Hash::make($newPass)]);
        UserRestorePasswordProcess::dispatch($user, $newPass);
    }
}
