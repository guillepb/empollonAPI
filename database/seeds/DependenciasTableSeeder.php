<?php

use Illuminate\Database\Seeder;

class DependenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Dependencia::class, 10)->create()->each(function ($dependencia) {
            $dependencia->nucleos()->savemany(factory(App\Nucleo::class, rand(1,3))->make());
        });
    }
}
