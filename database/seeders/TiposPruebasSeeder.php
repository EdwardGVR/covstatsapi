<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TiposPruebas as T;

class TiposPruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = [
            [
                "tipo" => "PCR (Hisopado)",
                "descripcion" => "Se considera la mejor prueba para determinar si una persona se contagió 
                                    el virus recientemente, pero este tipo de prueba puede continuar arrojando 
                                    resultados positivos mucho tiempo después de que la persona deja de contagiar 
                                    y no corre el riesgo de propagar el virus."
            ],
            [
                "tipo" => "Análisis de sangre",
                "descripcion" => "Detectan los anticuerpos que el organismo produce para combatir el virus. Estas pruebas
                                     son las más adecuadas para determinar si la persona estuvo expuesta al virus en el pasado, 
                                     pero NO se recomiendan para indicar si la persona está infectada actualmente."
            ],
            [
                "tipo" => "Prueba de antígenos",
                "descripción" => "Estas pruebas se realizan mediante un hisopado en nariz. En lugar de detectar el material genético 
                                    del virus, detectan una proteína presente en él. Habitualmente se encuentran disponibles como 
                                    pruebas “rápidas” que pueden realizarse en el consultorio médico. La rapidez con la que se obtienen
                                     los resultados hace que estas pruebas sean muy útiles."
            ]
        ];

        foreach ($tipos as $t) {
            T::create($t);
        }
    }
}
