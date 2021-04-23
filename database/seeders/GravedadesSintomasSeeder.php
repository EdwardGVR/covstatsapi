<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GravedadesSintomas as G;

class GravedadesSintomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gravedades = [
            [
                "gravedad" => "Leve",
                "descripcion" => "Suele presentarse con ciertas molestias pero sin peligro de complicación"
            ],
            [
                "gravedad" => "Moderada",
                "descripcion" => "Se manifiestan provocando mayor malestar, se debe prestar atención para evitar complicaciones"
            ],
            [
                "gravedad" => "Grave",
                "descripcion" => "Indican una complicación de la enfermedad, se debe buscar atención médica inmediatamente"
            ]
        ];

        foreach ($gravedades as $g) {
            G::create($g);
        }
    }
}
