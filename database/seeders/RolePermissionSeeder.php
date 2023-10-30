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
        // Permisos sobre post
        Permission::create(['name' => 'createPost']);
        Permission::create(['name' => 'editPost']);
        Permission::create(['name' => 'deletePost']);
        // Permisos sobre post
        Permission::create(['name' => 'showCase']);
        Permission::create(['name' => 'createCase']);
        Permission::create(['name' => 'editCase']);
        Permission::create(['name' => 'deleteCase']);
        // Permisos sobre avisos
        Permission::create(['name' => 'showNotice']);
        Permission::create(['name' => 'deleteNotice']);
        // ROLES
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleModer = Role::create(['name' => 'Moder']);
        $roleUser = Role::create(['name' => 'User']);

        // Asignación de permisos

        $roleAdmin->givePermissionTo([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15,16]);
        $roleModer->givePermissionTo([8, 9, 10, 11, 12, 13, 14,15,16]);
    }
}
