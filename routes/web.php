<?php

use App\Http\Controllers\SalnController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [AdminController::class, 'dashboard'])->name('dashboard');

// SALN
Route::get('/saln', [SalnController::class, 'index'])->name('saln.index');
Route::get('/addsaln', [SalnController::class, 'add'])->name('saln.add');
Route::get('/editsaln/{id}', [SalnController::class, 'edit'])->name('saln.edit');
Route::post('/form_saln', [SalnController::class, 'store'])->name('saln.store');
Route::post('/update_saln/{id}', [SalnController::class, 'update'])->name('saln.update');
Route::get('/delete_saln/{id}', [SalnController::class, 'delete'])->name('saln.delete');
Route::get('/view_saln/{id}', [SalnController::class, 'viewpdf'])->name('saln.viewpdf');

Route::middleware(['check_admin_access'])->group(function () {
    Route::get('/delete_user{id}', [UserController::class, 'delete'])->name('delete.user');
    Route::get('/users', [UserController::class, 'admin'])->name('users.admin');
    Route::get('/salns', [SalnController::class, 'admin'])->name('salns.admin');
});
