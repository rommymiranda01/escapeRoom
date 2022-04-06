<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\JocsController;
use App\Http\Controllers\SalaController;
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

/////////////////////////// Usuaris ////////////////////////

Route::get('/login', [UsersController::class, 'checkUser']);

Route::post('/check-credentials',[UsersController::class, 'credential']);

Route::get('/registra', [UsersController::class, 'create']);

Route::post('/guardar-usuari',[UsersController::class, 'store']);

Route::get('/index', [UsersController::class, 'index']);

Route::get('/users/{user}/editar', [UsersController::class, 'edit']);

Route::post('/users/{user}/actualitzar-user', [UsersController::class, 'update']);

Route::get('/users/{user}/eliminar', [UsersController::class, 'destroy']);

Route::get('/logout', [UsersController::class, 'logout']);

/////////////////////////// Jocs ////////////////////////

Route::get('/jocs', [JocsController::class, 'index']);

Route::get('/crea-joc', [JocsController::class, 'create']);

Route::post('/guardar-joc',[JocsController::class, 'store']);

Route::get('/jocs/{joc}/editar', [JocsController::class, 'edit']);

Route::post('/jocs/{joc}/actualitzar-joc', [JocsController::class, 'update']);

Route::get('/jocs/{joc}/eliminar', [JocsController::class, 'destroy']);

/////////////////////////// Sales ///////////////////////

Route::get('/salas', [SalaController::class, 'index']);

Route::get('/crea-sala', [SalaController::class, 'create']);

Route::post('/guardar-sala',[SalaController::class, 'store']);

Route::get('/salas/{sala}/editar', [SalaController::class, 'edit']);

Route::post('/salas/{sala}/actualitzar-sala', [SalaController::class, 'update']);

Route::get('/salas/{sala}/eliminar', [SalaController::class, 'destroy']);
