<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $config = [
            'Admin',
            'Guest'
        ];

        foreach ($config as $item) {
            Role::factory()->create(['name'=>$item]);
        }
    }
}
