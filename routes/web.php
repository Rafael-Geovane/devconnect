<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\ExplorarController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\PerfilController;


Route::get('/', [FeedController::class, 'index'])->name('feed');
Route::get('/feed', [FeedController::class, 'index']);

Route::get('/explorar', [ExplorarController::class, 'index'])->name('explorar');

Route::get('/mensagens', [MensagemController::class, 'index'])->name('mensagens');

Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');
Route::get('/perfil/editar', [PerfilController::class, 'edit'])->name('perfil.editar');
Route::post('/perfil/editar', [PerfilController::class, 'update'])->name('perfil.atualizar');
