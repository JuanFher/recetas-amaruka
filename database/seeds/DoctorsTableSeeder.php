<?php

use App\Doctor;
use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctor = New Doctor;
        $doctor->name = "Fernando";
        $doctor->lastname = "Pinto Floril";
        $doctor->email = "drpintofloril@gmail.com";
        $doctor->type_document = "1";
        $doctor->document = "9999999999";
        $doctor->address = "Pablo Palacios y la Gasca";
        $doctor->phone = "0999000444";
        $doctor->home_phone = "022222222";
        $doctor->title = "Médico Cirujano";
        $doctor->save();

        $doctor = New Doctor;
        $doctor->name = "Hans";
        $doctor->lastname = "Peyer";
        $doctor->email = "hanspeyer@gmail.com";
        $doctor->type_document = "3";
        $doctor->document = "sw00345";
        $doctor->address = "Suiza";
        $doctor->phone = "985413215";
        $doctor->home_phone = "022222222";
        $doctor->title = "Médico Cirujano";
        $doctor->save();

        $doctor = New Doctor;
        $doctor->name = "Luis";
        $doctor->lastname = "Chiriboga";
        $doctor->email = "luischiriboga@gmail.com";
        $doctor->type_document = "2";
        $doctor->document = "9999999999001";
        $doctor->address = "El Recreo";
        $doctor->phone = "0909090909";
        $doctor->home_phone = "022222222";
        $doctor->title = "Médico Cirujano";
        $doctor->save();
    }
}
