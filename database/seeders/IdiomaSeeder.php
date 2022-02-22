<?php

namespace Database\Seeders;

use App\Models\Idioma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idioma = new Idioma();
        $idioma2 = new Idioma();
        $idioma3 = new Idioma();
        $idioma4 = new Idioma();
        $idioma5 = new Idioma();
        $idioma6 = new Idioma();
        $idioma7 = new Idioma();
        $idioma8 = new Idioma();
        $idioma9 = new Idioma();
        $idioma10 = new Idioma();
        $idioma11 = new Idioma();
        $idioma12 = new Idioma();

        $idioma->nombre = "español";
        $idioma2->nombre = "inglés";
        $idioma3->nombre = "francés";
        $idioma4->nombre = "alemán";
        $idioma5->nombre = "chino";
        $idioma6->nombre = "arabe";
        $idioma7->nombre = "ruso";
        $idioma8->nombre = "portugués";
        $idioma9->nombre = "italiano";
        $idioma10->nombre = "euskera";
        $idioma11->nombre = "catalán";
        $idioma12->nombre = "gallego";

        $idioma->save();
        $idioma2->save();
        $idioma3->save();
        $idioma4->save();
        $idioma5->save();
        $idioma6->save();
        $idioma7->save();
        $idioma8->save();
        $idioma9->save();
        $idioma10->save();
        $idioma11->save();
        $idioma12->save();
    }
}
