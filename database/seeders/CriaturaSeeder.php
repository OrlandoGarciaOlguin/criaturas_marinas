<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pais;
use App\Models\Tipo;
class CriaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pais = Pais::all();
        $tipo = Tipo::all();

        $Criaturas = ['Kraken', 'Leviatán', 'Sirenas', 'Moby Dick', 'Monstruo del Lago Ness', 'Jörmundgander o la Serpiente de Midgard', 'Makara', 'Hipocampo', 'Umibōzu', 'Hidra de Lerna', 'Caribdis y Escila', 'Cthulhu'];
        foreach ($Criaturas as $criatura) {
            DB::table('criaturas')->insert([
                'nombre' => $criatura,
                'id_pais' => $pais->random()->id,
                'id_tipo' => $tipo->random()->id,
            ]);
        }
    }
}
