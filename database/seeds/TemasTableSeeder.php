<?php

use Illuminate\Database\Seeder;

class TemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tema::class, 20)->create()->each(function ($tema) {
            $tema->preguntas()->savemany(factory(App\Pregunta::class, 20)->make());
        });

        App\Pregunta::all()->each(function ($pregunta) {
            $pregunta->respuestas()->savemany(factory(App\Respuesta::class,2)->make(['es_correcta' => false]));
            $pregunta->respuestas()->save(factory(App\Respuesta::class)->make(['es_correcta' => true]));
        });
    }
}
