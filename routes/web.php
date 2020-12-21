<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;


Route::get('/', [ EventController::class , 'index'] )->name('home');
Route::get('/events/create', [ EventController::class , 'create'] )->middleware('auth');
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/{id}', [ EventController::class , 'show'] );
Route::delete('/events/{id}', [EventController::class, 'destroy']);


Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');



