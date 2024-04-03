<?php

namespace App\Services\Users;

use App\Models\Role;
use App\Models\User;
use Exception;


class CreateAdminUser extends CreateUserService
{
    /**
     * @param string $name
     * @param string $email
     * @param string $password
     * @return User
     * @throws Exception
     */
    public function create(string $name, string $email,string $password) :User
    {
        return $this
            ->setRoleId(Role::ADMIN_ROLE)
            ->setEmail($email)
            ->setName($name)
            ->setPassword($password)
            ->save();
    }
}