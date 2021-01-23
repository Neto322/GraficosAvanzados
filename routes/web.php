<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "Hola,estas en la raiz del dominio";
});

Route::get('/noticias', function () {
    return "Hola,estas en noticias";
});

Route::post("/noticias", function () 
{
    return "Esta ruta es para agregar nuevas noticias";
});

Route::match( ["get","post"] , "/blog" , function () 
{
    return "Aqui andamos con get y possttr";
});

Route::any( "/promociones" , function () 
{
    return "Aqui andamos con todos los metodos posibles";

});

Route::get("/usuarios/{id}",function ($id) 
{
    return "Aqui se muestra la informacion del usuario: " . $id;
});

Route::get("/bienvenida/{nombre}", function($nombre = "usuario")
{
    $respuesta = "Bienvenido";

    $respuesta .= "" . $nombre;

    return $respuesta;
});