<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pais = ['Finlandia','Mundial','Escocia','Noruega','India','Grecia','Japon'];
        foreach ($pais as $key => $value) {
            DB::table('pais')->insert([
                'nombre' => $value,
            ]);
        }
    }
}
