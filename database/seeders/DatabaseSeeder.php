<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the Role and Permission Seeder
        $this->call(RolesAndPermissionsSeeder::class);

        // Call the UserSeeder to create users and assign them roles
        $this->call(UserSeeder::class);

        // You can also create other initial data here if necessary.
    }
}
