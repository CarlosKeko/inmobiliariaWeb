<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicio = new Servicio();
        $servicio2 = new Servicio();
        $servicio3 = new Servicio();
        $servicio4 = new Servicio();
        $servicio5 = new Servicio();
        $servicio6 = new Servicio();
        $servicio7 = new Servicio();
        $servicio8 = new Servicio();
        $servicio9 = new Servicio();

        $servicio->nombre = "administración de fincas";
        $servicio2->nombre = "agente inmobiliario";
        $servicio3->nombre = "analista inversor";
        $servicio4->nombre = "api";
        $servicio5->nombre = "consultoría inmobiliaria";
        $servicio6->nombre = "estudio técnico y de diseño";
        $servicio7->nombre = "gestor de propiedades";
        $servicio8->nombre = "promoción inmobiliaria";
        $servicio9->nombre = "tasaciones";

        $servicio->save();
        $servicio2->save();
        $servicio3->save();
        $servicio4->save();
        $servicio5->save();
        $servicio6->save();
        $servicio7->save();
        $servicio8->save();
        $servicio9->save();
    }
}
