<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123') // Ensure the password is hashed
        ]);
        $admin->assignRole('Admin'); // Assign the Admin role

        // Supplier user
        $supplier = User::create([
            'name' => 'Supplier User',
            'email' => 'supplier@example.com',
            'password' => Hash::make('password123')
        ]);
        $supplier->assignRole('Supplier'); // Assign the Supplier role

        // Donor user
        $donor = User::create([
            'name' => 'Donor User',
            'email' => 'donor@example.com',
            'password' => Hash::make('password123')
        ]);
        $donor->assignRole('Donor'); // Assign the Donor role

        // Beneficiary user
        $beneficiary = User::create([
            'name' => 'Beneficiary User',
            'email' => 'beneficiary@example.com',
            'password' => Hash::make('password123')
        ]);
        $beneficiary->assignRole('Beneficiary'); // Assign the Beneficiary role
    }
}
