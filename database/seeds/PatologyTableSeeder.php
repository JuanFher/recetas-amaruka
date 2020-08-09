<?php

use App\Patology;
use Illuminate\Database\Seeder;

class PatologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patology = New Patology;
        $patology->name = "Cansancio";
        $patology->description = "es la falta de fuerzas después de realizar un trabajo físico, intelectual o emocional, o por la falta de descanso";
        $patology->save();
        
        $patology = New Patology;
        $patology->name = "Estres";
        $patology->description = "Estado de cansancio mental provocado por la exigencia de un rendimiento muy superior al normal; suele provocar diversos trastornos físicos y mentales.";
        $patology->save();
        
        $patology = New Patology;
        $patology->name = "Fatiga";
        $patology->description = "puede ser una respuesta normal e importante al esfuerzo físico, al estrés emocional, al aburrimiento o a la falta de sueño.";
        $patology->save();
        
        $patology = New Patology;
        $patology->name = "Imsomnio";
        $patology->description = "Es la dificultad para conciliar el sueño, permanecer dormido durante la noche o despertarse demasiado temprano en la mañana.";
        $patology->save();
        
        $patology = New Patology;
        $patology->name = "Estreñimiento";
        $patology->description = "Tener menos de tres evacuaciones por semana. Tener heces grumosas o duras. Hacer un gran esfuerzo para tener evacuaciones intestinales.";
        $patology->save();
        
    }
}
