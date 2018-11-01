<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([DependenciasTableSeeder::class]);

        $this->call([TemasTableSeeder::class]);

        // obtenemos todos los temas y asignamos de dos a cuatro al azar a cada núcleo
        $temas = App\Tema::all();
        App\Nucleo::all()->each(function ($nucleo) use ($temas) {
            $nucleo->temas()->savemany($temas->random(rand(2,4)));
        });

    }
}
