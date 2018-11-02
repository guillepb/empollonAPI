<?php

use App\Dependencia;
use App\Nucleo;
use App\Tema;
use App\Pregunta;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('dependencia[s]', function () {
    return response()->json(Dependencia::with('nucleos')->get());
});

$router->get('nucleo/{id}/temas', function ($id) {
    return response()->json(Nucleo::find($id)->temas()->get());
});

$router->get('tema/{id}/preguntas', function ($id) {
    return response()->json(Pregunta::with('respuestas')->where('tema_id', $id)->get());
});
