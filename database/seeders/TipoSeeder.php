<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Tipo = ['Marino','Anfibio'];
        foreach ($Tipo as $key => $value) {
            DB::table('tipos')->insert([
                'tipo' => $value,
            ]);
        }
    }
}
