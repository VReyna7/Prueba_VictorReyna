<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TareaController as TareaV1;
use App\Http\Controllers\Api\LoginController as Login;

Route::apiResource('/tareas', TareaV1::class)->middleware('auth:sanctum');

Route::post('login', [
    Login::class,
    'login'
]);