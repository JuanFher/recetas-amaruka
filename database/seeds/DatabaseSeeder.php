<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(LaboratoriesTableSeeder::class);
        $this->call(MedicinesTableSeeder::class);
        $this->call(PatologyTableSeeder::class);
    }
}
