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

Route::resource('/', 'App\Http\Controllers\WelcomeController');

Auth::routes();

//RUTAS DEL USUARIO
Route::resource('/home', 'App\Http\Controllers\UserNormalController');
Route::resource('/usuario/juego', 'App\Http\Controllers\JuegoController');
Route::resource('/usuario/resultadoQuiz', 'App\Http\Controllers\ResultadoQuizController');
Route::resource('/usuario/mostrarAlbum', 'App\Http\Controllers\AlbumUsuarioController');
Route::resource('/usuario/intercambio', 'App\Http\Controllers\IntercambioController');
Route::resource('/usuario/obtenerAlbum', 'App\Http\Controllers\CrearAlbumController');
Route::get('/test', [App\Http\Controllers\JuegoController::class, 'store'])->name('test.store');



//RUTAS DEL ADMIN
Route::resource('/homeAdmin', 'App\Http\Controllers\AdminController');

Route::resource('/administrador/adminUsers', 'App\Http\Controllers\AdminUserController');
Route::get('/administrador/adminUsers/{id}/destroy', 
    ['uses' => 'App\Http\Controllers\AdminUserController@destroy',
    'as' => 'adminUsers.destroy'
]);

Route::resource('/administrador/adminAlbum', 'App\Http\Controllers\AlbumController');

Route::resource('/administrador/adminTematicas', 'App\Http\Controllers\TematicaController');

Route::resource('/administrador/uploadCromos', 'App\Http\Controllers\CromController');
Route::get('/administrador/uploadCromos/{id}/destroy', 
    ['uses' => 'App\Http\Controllers\CromController@destroy',
    'as' => 'uploadCromos.destroy'
]);

Route::resource('/administrador/uploadPreguntas', 'App\Http\Controllers\PreguntController');
Route::get('/administrador/uploadPreguntas/{id}/destroy', 
    ['uses' => 'App\Http\Controllers\PreguntController@destroy',
    'as' => 'uploadPreguntas.destroy'
]);