<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(App\Dependencia::class, function (Faker\Generator $faker) {
    return [
        'icaocode' => strtoupper($faker->lexify('le??')),
        'nombre' => 'Centro de Control de '.ucfirst($faker->word)
    ];
});

$factory->define(App\Nucleo::class, function (Faker\Generator $faker) {
    return [
        'nombre' => 'Núcleo '.ucfirst($faker->word)
    ];
});

$factory->define(App\Tema::class, function (Faker\Generator $faker) {
    return [
        'descripcion' => 'Tema '.$faker->word(2)
    ];
});

$factory->define(App\Pregunta::class, function (Faker\Generator $faker) {
    return [
        'texto' => $faker->sentence,
        'referencia' => $faker->numerify('Ref: ##.##.###')
    ];
});

$factory->define(App\Respuesta::class, function (Faker\Generator $faker) {
    return [
        'texto' => $faker->sentence,
        'es_correcta' => $faker->boolean
    ];
});
