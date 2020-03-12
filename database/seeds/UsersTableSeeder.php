<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\assignRole;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editor = User::create([
            'name' => 'doctor',
            'email' => 'doctor@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $editor->assignRole('doctor');

        // Rol Moderador
        $moderador = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $moderador->assignRole('admin');
        
        // Rol Super_admin
        $admin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@amaruka.com',
            'password' => bcrypt('123456')
        ]);

        $admin->assignRole('super_admin');
    }
}
