<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamentos;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = [
            [
                "departamento" => "Ahuachapán",
                "zona_id" => 1
            ],
            [
                "departamento" => "Santa Ana",
                "zona_id" => 1
            ],
            [
                "departamento" => "Sonsonate",
                "zona_id" => 1
            ],
            [
                "departamento" => "La Libertad",
                "zona_id" => 2
            ],
            [
                "departamento" => "Chalatenango",
                "zona_id" => 2
            ],
            [
                "departamento" => "Cuscatlán",
                "zona_id" => 2
            ],
            [
                "departamento" => "San Salvador",
                "zona_id" => 2
            ],
            [
                "departamento" => "La Paz",
                "zona_id" => 3
            ],
            [
                "departamento" => "Cabañas",
                "zona_id" => 3
            ],
            [
                "departamento" => "San Vicente",
                "zona_id" => 3
            ],
            [
                "departamento" => "Usulutan",
                "zona_id" => 4
            ],
            [
                "departamento" => "San Miguel",
                "zona_id" => 4
            ],
            [
                "departamento" => "Morazán",
                "zona_id" => 4
            ],
            [
                "departamento" => "La Unión",
                "zona_id" => 4
            ]
        ];

        foreach ($departamentos as $departamento) {
            Departamentos::create($departamento);
        }
    }
}
