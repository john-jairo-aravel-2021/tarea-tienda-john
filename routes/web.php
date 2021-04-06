<?php

use App\Models\Imagen;
use APP\Models\Producto;
use App\Models\Usuario;
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
    return view('welcome');
});

Route::get('ttienda', function(){

    $usuario = Usuario::where('cedula','');
    dd($usuario);

});
