<?php

namespace App\Services\Users;

use App\Models\Role;
use App\Models\User;
use Exception;

class CreateGuestUser extends CreateUserService
{
    /**
     * @param string $name
     * @param string $email
     * @return User
     * @throws Exception
     */
    public function create(string $name,string $email) :User
    {
        return $this
            ->setEmail($email)
            ->setName($name)
            ->save();
    }
}