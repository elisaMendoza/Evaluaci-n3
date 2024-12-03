<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TSOController;

Route::get('/', function () {
    return('welcome');
});

Route::get('/alumnos', [
    TSOController::class,'Alumnos'
]);
Route::get('/cursos', [
    TSOController::class,'Cursos'
]);
Route::get('/carreras', [
    TSOController::class,'Carreras'
]);
