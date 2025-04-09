<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create permissions
        $permissions = [
            'view resources',
            'create resources',
            'update resources',
            'delete resources',
            'view beneficiaries',
            'create beneficiaries',
            'update beneficiaries',
            'delete beneficiaries',
            'distribute resources',
            'manage donations'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions
        $admin = Role::create(['name' => 'Admin']);
        $admin->givePermissionTo(Permission::all());

        $supplier = Role::create(['name' => 'Supplier']);
        $supplier->givePermissionTo(['view resources', 'create resources', 'update resources', 'delete resources']);

        $donor = Role::create(['name' => 'Donor']);
        $donor->givePermissionTo(['manage donations']);

        $beneficiary = Role::create(['name' => 'Beneficiary']);
        $beneficiary->givePermissionTo(['view resources', 'distribute resources']);

        // Optionally, you can assign a role to a user (example):
        // $user = User::find(1); // find a user by ID
        // $user->assignRole('Admin'); // Assign the admin role to the user
    }
}
