<?php

namespace Domain\Task\Actions;

use Domain\User\DataTransferObject\UserData;

use Domain\User\Models\User;

final class CreateUserAction
{

    public function __invoke(UserData $userData):User
    {
        return User::create(
            [
                'email' => $userData->email,
                'password' => $userData->password,
            ]
        );
    }

}