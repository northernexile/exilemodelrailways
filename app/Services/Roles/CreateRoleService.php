<?php

namespace App\Services\Roles;

use App\Models\Role;

class CreateRoleService
{
    public function create(string $name) :Role
    {
        $name = $this->toStorageFormat($name);
        if($this->alreadyExists($name)){
            throw new \Exception('This role already exists');
        }
        /** @var Role $role */
        $role = new Role();
        $role->name = $this->toStorageFormat($name);
        $role->save();

        return $role;
    }

    private function alreadyExists($name) :bool
    {
        return boolval(Role::firstWhere('name','=',$name));
    }

    private function toStorageFormat(string $name) :string
    {
        return ucwords(strtolower($name));
    }
}