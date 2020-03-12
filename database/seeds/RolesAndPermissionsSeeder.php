<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'read-users']);
        Permission::create(['name' => 'update-user']);
        Permission::create(['name' => 'delete-user']);

        Permission::create(['name' => 'create-role']);
        Permission::create(['name' => 'read-roles']);
        Permission::create(['name' => 'update-role']);
        Permission::create(['name' => 'delete-role']);

        Permission::create(['name' => 'create-permission']);
        Permission::create(['name' => 'read-permissions']);
        Permission::create(['name' => 'update-permission']);
        Permission::create(['name' => 'delete-permission']);

        Permission::create(['name' => 'create-doctor']);
        Permission::create(['name' => 'read-doctors']);
        Permission::create(['name' => 'update-doctor']);
        Permission::create(['name' => 'delete-doctor']);

        Permission::create(['name' => 'create-laboratory']);
        Permission::create(['name' => 'read-laboratories']);
        Permission::create(['name' => 'update-laboratory']);
        Permission::create(['name' => 'delete-laboratory']);

        Permission::create(['name' => 'create-patient']);
        Permission::create(['name' => 'read-patients']);
        Permission::create(['name' => 'update-patient']);
        Permission::create(['name' => 'delete-patient']);

        Permission::create(['name' => 'create-recipe']);
        Permission::create(['name' => 'read-recipes']);
        Permission::create(['name' => 'update-recipe']);
        Permission::create(['name' => 'delete-recipe']);

        Permission::create(['name' => 'create-unit']);
        Permission::create(['name' => 'read-units']);
        Permission::create(['name' => 'update-unit']);
        Permission::create(['name' => 'delete-unit']);

        Permission::create(['name' => 'create-medicine']);
        Permission::create(['name' => 'read-medicines']);
        Permission::create(['name' => 'update-medicine']);
        Permission::create(['name' => 'delete-medicine']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('create-patient');
        $role->givePermissionTo('read-patients');
        $role->givePermissionTo('update-patient');
        $role->givePermissionTo('delete-patient');
        $role->givePermissionTo('create-recipe');
        $role->givePermissionTo('read-recipes');
        $role->givePermissionTo('update-recipe');
        $role->givePermissionTo('delete-recipe');
        $role->givePermissionTo('create-laboratory');
        $role->givePermissionTo('read-laboratories');
        $role->givePermissionTo('update-laboratory');
        $role->givePermissionTo('delete-laboratory');
        $role->givePermissionTo('create-unit');
        $role->givePermissionTo('read-units');
        $role->givePermissionTo('update-unit');
        $role->givePermissionTo('delete-unit');
        $role->givePermissionTo('create-medicine');
        $role->givePermissionTo('read-medicines');
        $role->givePermissionTo('update-medicine');
        $role->givePermissionTo('delete-medicine');
        $role->givePermissionTo('create-doctor');
        $role->givePermissionTo('read-doctors');
        $role->givePermissionTo('update-doctor');
        $role->givePermissionTo('delete-doctor');

        $role = Role::create(['name' => 'doctor']);
        $role->givePermissionTo('create-patient');
        $role->givePermissionTo('read-patients');
        $role->givePermissionTo('update-patient');
        $role->givePermissionTo('delete-patient');
        $role->givePermissionTo('create-recipe');
        $role->givePermissionTo('read-recipes');
        $role->givePermissionTo('update-recipe');
        $role->givePermissionTo('delete-recipe');
        $role->givePermissionTo('create-laboratory');
        $role->givePermissionTo('read-laboratories');
        $role->givePermissionTo('update-laboratory');
        $role->givePermissionTo('delete-laboratory');
        $role->givePermissionTo('create-unit');
        $role->givePermissionTo('read-units');
        $role->givePermissionTo('update-unit');
        $role->givePermissionTo('delete-unit');
        $role->givePermissionTo('create-medicine');
        $role->givePermissionTo('read-medicines');
        $role->givePermissionTo('update-medicine');
        $role->givePermissionTo('delete-medicine');

        $role = Role::create(['name' => 'super_admin']);
        $role->givePermissionTo(Permission::all()); 
    }
}
