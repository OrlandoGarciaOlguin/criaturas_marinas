<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PaisSeeder;
use Database\Seeders\TipoSeeder;
use Database\Seeders\CriaturaSeeder;


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
        $this -> call(TipoSeeder::class);
        $this -> call(PaisSeeder::class);
        $this -> call(CriaturaSeeder::class);
    }
}
