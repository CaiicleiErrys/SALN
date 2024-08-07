<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\AppearanceController;


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [AdminController::class, 'dashboard'])->name('dashboard');

// Application for Leave
Route::get('/leave_user', [LeaveController::class, 'index'])->name('leave.user');
Route::get('/add_leave', [LeaveController::class, 'add'])->name('add.leave');
Route::get('/edit_leave{id}', [LeaveController::class, 'edit'])->name('edit.leave');
Route::post('/leave_form', [LeaveController::class, 'store'])->name('store.leave');
Route::post('/update_leave{id}', [LeaveController::class, 'update'])->name('update.leave');
Route::get('/delete_leave{id}', [LeaveController::class, 'delete'])->name('delete.leave');
Route::get('/view_leave_form{id}', [LeaveController::class, 'viewpdf'])->name('view.leave');

// Certificate of Appearance
Route::get('/cert_appearance', [AppearanceController::class, 'index'])->name('cert.appearance');
Route::get('/addcert_appearance', [AppearanceController::class, 'add'])->name('add.cert.appearance');
Route::get('/editcert_appearance{id}', [AppearanceController::class, 'edit'])->name('edit.cert.appearance');
Route::post('/form_cert_appearance', [AppearanceController::class, 'store'])->name('store.cert.appearance');
Route::post('/update_cert_appearance{id}', [AppearanceController::class, 'update'])->name('update.cert.appearance');
Route::get('/delete_cert_appearance{id}', [AppearanceController::class, 'delete'])->name('delete.cert.appearance');
Route::get('/view_cert_appearance{id}', [AppearanceController::class, 'viewpdf'])->name('view.cert.appearance');

Route::get('/delete_user{id}', [UserController::class, 'delete'])->name('delete.user');

Route::middleware(['check_admin_access'])->group(function () {
    Route::get('/users', [UserController::class, 'admin'])->name('users.admin');
    Route::get('/leave_admin', [LeaveController::class, 'admin'])->name('leave.admin');
    Route::get('/cert_appearance_admin', [AppearanceController::class, 'admin'])->name('cert.appearance.admin');
    // Route::get('/qrcode', [QrCodeController::class, 'show'])->name('qrcode');
});
