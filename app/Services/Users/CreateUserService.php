<?php

namespace App\Services\Users;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Hash;

class CreateUserService
{
    private string $name = '';

    private string $email = '';

    private string $password = '';

    private int $roleId = Role::GUEST_ROLE;

    public function setName(string $name): CreateUserService
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $email
     * @return $this
     * @throws Exception
     */
    public function setEmail(string $email): CreateUserService
    {
        if(User::emailExists($email)) {
            throw new Exception('Email already registered');
        }
        $this->email = $email;
        return $this;
    }

    public function setPassword(string $password): CreateUserService
    {
        $this->password = $password;
        return $this;
    }

    public function setRoleId(int $roleId = Role::GUEST_ROLE): CreateUserService
    {
        $this->roleId = $roleId;
        return $this;
    }

    public function save() :User
    {
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->role_id = $this->roleId;
        $user->save();

        return $user;
    }
}