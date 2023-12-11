<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'admin123'
        ]);
        $admin_role = Role::create(['name' => 'admin']);
        $user_role = Role::create(['name' => 'user']);
        $user->assignRole([$admin_role]);

    }
}
