<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database;
use Illuminate\Support\Facades\DB;
use App\Models\Zonas;

class ZonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zonas::insert([
            ['zona' => 'Occidental'],
            ['zona' => 'Central'],
            ['zona' => 'Paracentral'],
            ['zona' => 'Oriental'],
        ]);

        // DB::table('zonas')->insert([
        //     [
        //         "zona" => "Occidental"
        //     ],
        //     [
        //         "zona" => "Central"
        //     ],
        //     [
        //         "zona" => "Paracentral"
        //     ],
        //     [
        //         "zona" => "Oriental"
        //     ]
        // ]);
    }
}
