<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                "rol" => "usuario",
                "descripcion" => "Tiene permitido consultar la información del sistema y hacer uso de las funciones de interacción"
            ],
            [
                "rol" => "administrador",
                "descripcion" => "Tiene permitido publicar nuevo contenido que será consultado por los usuarios"
            ]
        ];

        foreach ($roles as $rol) {
            Roles::create($rol);
        }
    }
}
