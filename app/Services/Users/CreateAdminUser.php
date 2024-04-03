<?php

namespace App\Services\Users;

use App\Models\Role;
use App\Models\User;
use Exception;


class CreateAdminUser extends CreateUserService
{
    /**
     * @throws Exception
     */
    public function create(string $name, string $email) :User
    {
        return $this
            ->setRoleId(Role::ADMIN_ROLE)
            ->setEmail($email)
            ->setName($name)
            ->save();
    }
}