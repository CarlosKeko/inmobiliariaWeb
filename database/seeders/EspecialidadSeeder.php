<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especialidad = new Especialidad();
        $especialidad2 = new Especialidad();
        $especialidad4 = new Especialidad();
        $especialidad5 = new Especialidad();
        $especialidad6 = new Especialidad();
        $especialidad7 = new Especialidad();
        $especialidad8 = new Especialidad();
        $especialidad9 = new Especialidad();
        $especialidad10 = new Especialidad();

        $especialidad->nombre = "vivienda";
        $especialidad2->nombre = "obra nueva";
        $especialidad4->nombre = "local";
        $especialidad5->nombre = "nave";
        $especialidad6->nombre = "garaje";
        $especialidad7->nombre = "oficina";
        $especialidad8->nombre = "trastero";
        $especialidad9->nombre = "terreno";
        $especialidad10->nombre = "edificio";

        $especialidad->save();
        $especialidad2->save();
        $especialidad4->save();
        $especialidad5->save();
        $especialidad6->save();
        $especialidad7->save();
        $especialidad8->save();
        $especialidad9->save();
        $especialidad10->save();
    }
}
