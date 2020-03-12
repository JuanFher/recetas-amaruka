<?php

use App\Unit;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit = New Unit;
        $unit->name = "Unidad";
        $unit->simbol = "u";
        $unit->save();

        $unit = New Unit;
        $unit->name = "Gramos";
        $unit->simbol = "gr";
        $unit->save();

        $unit = New Unit;
        $unit->name = "MiliGramos";
        $unit->simbol = "mg";
        $unit->save();

        $unit = New Unit;
        $unit->name = "Mililitros";
        $unit->simbol = "ml";
        $unit->save();
    }
}
