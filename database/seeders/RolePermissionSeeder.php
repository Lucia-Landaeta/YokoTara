<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // PERMISOS
        // Permisos sobre roles
        Permission::create(['name' => 'showRole']);
        Permission::create(['name' => 'createRole']);
        Permission::create(['name' => 'editRole']);
        Permission::create(['name' => 'deleteRole']);
        // Permisos sobre user
        Permission::create(['name' => 'showUser']);
        Permission::create(['name' => 'editUser']);
        Permission::create(['name' => 'deleteUser']);
        // ROLES
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleModer = Role::create(['name' => 'Moder']);
        $roleUser = Role::create(['name' => 'User']);

        // Asignación de permisos

        $roleAdmin->givePermissionTo([1,2,3,4,5,6,7]);
    }
}
