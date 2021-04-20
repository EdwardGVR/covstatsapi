<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorias;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                "categoria" => "Recomendación Social",
                "descripcion" => "Recomendaciones a tomar en cuenta al interactuar con otras personas o grupos"
            ],
            [
                "categoria" => "Recomendación Personal",
                "descripcion" => "Recomendaciones a tomar en cuenta personalmente"
            ],
            [
                "categoria" => "Nota Informativa",
                "descripcion" => "Información relacionada a la enfermedad"
            ]
        ];

        foreach($categorias as $categoria) {
            Categorias::create($categoria);
        }
    }
}
