<?php

/**
 * Made by CV. IRANDO
 * https://irando.co.id ©2023
 * info@irando.co.id
 */

namespace Modules\Contacts\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'add contacts', 'module' => 'Contacts']);
        Permission::create(['name' => 'edit contacts', 'module' => 'Contacts']);
        Permission::create(['name' => 'delete contacts', 'module' => 'Contacts']);

        $role = Role::firstOrCreate(['name' => 'staff']);
        $role->givePermissionTo([
            'add contacts',
            'edit contacts',
        ]);

        $role = Role::firstOrCreate(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
