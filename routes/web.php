<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.halaman');
});



Auth::routes();

//dashboard admin dan siswa
Route::get('/dashboard/admin', [App\Http\Controllers\DashboardAdminController::class, 'index'])->name('admin');
Route::get('/dashboard/siswa', [App\Http\Controllers\DashboardSiswaController::class, 'index'])->name('siswa');

//tampilan siswa
Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}/edit', [App\Http\Controllers\SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'destroy'])->name('siswa.destroy');


Route::get('/profile{id}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');