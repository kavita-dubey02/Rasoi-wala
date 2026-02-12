<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Reset cached roles and permissions
    app()[PermissionRegistrar::class]->forgetCachedPermissions();

    // Create Roles with WEB guard
    Role::firstOrCreate([
        'name' => 'admin',
        'guard_name' => 'web'
    ]);

    Role::firstOrCreate([
        'name' => 'chef',
        'guard_name' => 'web'
    ]);

    Role::firstOrCreate([
        'name' => 'customer',
        'guard_name' => 'web'
    ]);
    }
}
