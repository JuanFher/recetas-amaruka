<?php

use App\Laboratory;
use Illuminate\Database\Seeder;

class LaboratoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laboratory = New Laboratory;
        $laboratory->name = "Fithom Pharma";
        $laboratory->description = "Medicina Natural";
        $laboratory->save();

        $laboratory = New Laboratory;
        $laboratory->name = "Eva Pharma";
        $laboratory->description = "Medicina Alternativa";
        $laboratory->save();

        $laboratory = New Laboratory;
        $laboratory->name = "James Brown";
        $laboratory->description = "Medicina Veterinaria";
        $laboratory->save();
    }
}
