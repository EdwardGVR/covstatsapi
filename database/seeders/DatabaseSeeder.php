<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $this->call(ZonasSeeder::class);
        $this->call(DepartamentosSeeder::class);
        $this->call(MunicipiosSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(usersSeeder::class);
        $this->call(TiposPruebasSeeder::class);
        $this->call(ResultadosPruebasSeeder::class);

        $this->call(GravedadesSintomasSeeder::class);

        $this->call(SintomasSeeder::class);
    }
}
