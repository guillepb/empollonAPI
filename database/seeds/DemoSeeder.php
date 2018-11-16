<?php

use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nucleos = [
            [
                'nombre' => 'Ruta E',
                'icaocode' => 'LECB',
                'nombredep' => 'Centro de Control de Barcelona'
            ],
            [
                'nombre' => 'Ruta W',
                'icaocode' => 'LECB',
                'nombredep' => 'Centro de Control de Barcelona'
            ],
            [
                'nombre' => 'TMA',
                'icaocode' => 'LECB',
                'nombredep' => 'Centro de Control de Barcelona'
            ],
            [
                'nombre' => 'Torre de Control de Barcelona',
                'icaocode' => 'LEBL',
                'nombredep' => 'Torre de Control de Barcelona'
            ]
        ];

        foreach ($nucleos as $nucleo)
        {
            $dep = App\Dependencia::firstOrCreate([
                'icaocode' => $nucleo['icaocode'],
                'nombre' => $nucleo['nombredep']
            ]);
            $dep->nucleos()->create(['nombre' => $nucleo['nombre']]);
        }
    }
}
