<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $adminRole = Role::create(['name' => 'admin']);

        $permissions = [
            'manage_system',
            'manage_users',
            'manage_plugins',
            'manage_modules',
            'manage_themes',
            'manage_permissions',
            'manage_content',
            'backup_data',
            'restore_data'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $adminRole->syncPermissions($permissions);
    }

}
