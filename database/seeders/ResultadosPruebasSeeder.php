<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResultadosPruebas as R;

class ResultadosPruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resultados = [
            [
                "resultado" => "Positivo",
                "descripcion" => "El resultado de la prueba ha sido positivo"
            ],
            [
                "resultado" => "Negativo",
                "descripcion" => "El resultado de la prueba ha sido negativo"
            ]
        ];

        foreach ($resultados as $r) {
            R::create($r);
        }
    }
}
