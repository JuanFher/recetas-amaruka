<?php

use App\Medicine;
use Illuminate\Database\Seeder;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicine = New Medicine;
        $medicine->name = "Impletol";
        $medicine->description = "Medicina regenerativa";
        $medicine->unit_id = 4;
        $medicine->container = 50;
        $medicine->laboratory_id = 3;
        $medicine->compound = "Procaina + cafeina";
        $medicine->save();

        $medicine = New Medicine;
        $medicine->name = "Bio C";
        $medicine->description = "Vitamina C";
        $medicine->unit_id = 4;
        $medicine->container = 50;
        $medicine->laboratory_id = 3;
        $medicine->compound = "Acido Ascorbico";
        $medicine->save();

        $medicine = New Medicine;
        $medicine->name = "Renfit";
        $medicine->description = "Regenerador";
        $medicine->unit_id = 4;
        $medicine->container = 25;
        $medicine->laboratory_id = 1;
        $medicine->compound = "Tinturas Madres";
        $medicine->save();
    }
}
