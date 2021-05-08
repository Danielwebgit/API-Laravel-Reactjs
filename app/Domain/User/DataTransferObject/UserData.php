<?php
namespace Domain\Task\TataTransferObject;

use App\Api\Controllers\Requests\UserRequest;

use Spatie\DataTransferObject\DataTransferObject;


class UserData extends DataTransferObject
{
    /* @var string */
    public $email;

    /* @var string */
    public $password;


    public static function fromRequest(UserRequest $userrequest): UserData
    {
        return new Self([
            'email' => $userrequest['email'],
            'password' => $userrequest['password']

        ]);
    }
}