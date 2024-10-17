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

        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $developerRole = Role::firstOrCreate(['name' => 'developer']);

        $adminPermissions = [
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

        $developerPermissions = [
            'access_server_settings',
            'manage_system_code',
            'create_modules',
            'create_themes',
            'install_themes',
            'manage_plugins',
            'view_logs',
        ];

        foreach ($adminPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $adminRole->syncPermissions($adminPermissions);

        foreach ($developerPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $developerRole->syncPermissions($developerPermissions);
    }
}
