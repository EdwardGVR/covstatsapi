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
        // $tipos = [
        //     [
        //         "tipo" => "PCR (Hisopado)",
        //         "descripcion" => "Se considera la mejor prueba para determinar si una persona se contagió 
        //                             el virus recientemente, pero puede continuar arrojando 
        //                             resultados positivos después de que la persona deja de contagiar."
        //     ],
        //     [
        //         "tipo" => "Análisis de sangre",
        //         "descripcion" => "Detectan los anticuerpos que el organismo produce para combatir el virus. Estas pruebas
        //                              son las más adecuadas para determinar si la persona estuvo expuesta al virus en el pasado, 
        //                              pero NO se recomiendan para indicar si la persona está infectada actualmente."
        //     ],
        //     [
        //         "tipo" => "Prueba de antígenos",
        //         "descripción" => "En lugar de detectar el material genético del virus, detectan una proteína presente en él. 
        //                             son llamadas pruebas “rápidas”. La rapidez con la que se obtienen
        //                              los resultados hace que estas pruebas sean muy útiles."
        //     ]
        // ];

        $tipos = [
            [
                "tipo" => "PCR (Hisopado)",
                "descripcion" => "Se considera la mejor prueba para determinar si una persona se contagió 
                                    el virus recientemente."
            ],
            [
                "tipo" => "Análisis de sangre",
                "descripcion" => "Detectan los anticuerpos que el organismo produce para combatir el virus. Estas pruebas
                                     son las más adecuadas para determinar si la persona estuvo expuesta al virus en el pasado."
            ],
            [
                "tipo" => "Prueba de antígenos",
                "descripcion" => "En lugar de detectar el material genético del virus, detectan una proteína presente en él. 
                                    son llamadas pruebas “rápidas”."
            ]
        ];

        foreach ($tipos as $t) {
            T::create($t);
        }
    }
}
