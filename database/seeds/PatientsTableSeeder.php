<?php

use App\Patient;
use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = New Patient;
        $patient->name = "Santiago";
        $patient->lastname = "Peña";
        $patient->type_document = "1";
        $patient->document = "9999999999";
        $patient->age=40;
        $patient->address = "Sin Dirección";
        $patient->phone = "9999999999";
        $patient->email = "ejemplo@ejemplo.com";
        $patient->save();

        $patient = New Patient;
        $patient->name = "Ana";
        $patient->lastname = "Lema";
        $patient->type_document = "1";
        $patient->document = "1720736428";
        $patient->age=25;
        $patient->address = "La quintana";
        $patient->phone = "13246579";
        $patient->email = "ana@admin.com";
        $patient->save();

        $patient = New Patient;
        $patient->name = "Juan";
        $patient->lastname = "Lema";
        $patient->type_document = "3";
        $patient->document = "1720234428";
        $patient->age=35;
        $patient->address = "La Forestal";
        $patient->phone = "13246579";
        $patient->email = "juan@admin.com";
        $patient->save();

        $patient = New Patient;
        $patient->name = "Pablo";
        $patient->lastname = "Lema";
        $patient->type_document = "2";
        $patient->document = "1720736428001";
        $patient->age=53;
        $patient->address = "La roca";
        $patient->phone = "123246579";
        $patient->email = "pablo@admin.com";
        $patient->save();

        $patient = New Patient;
        $patient->name = "Ruth";
        $patient->lastname = "Lema";
        $patient->type_document = "1";
        $patient->document = "1120736428";
        $patient->age=48;
        $patient->address = "La Polo";
        $patient->phone = "13246579";
        $patient->email = "ruth@admin.com";
        $patient->save();
    }
}
