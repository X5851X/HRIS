<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\FileUploadController;
use App\Http\Controllers\AuthController;  

// Route untuk menampilkan halaman welcome  
Route::get('/', function () {  
    return view('welcome'); 
});  

// Route untuk menampilkan form login  
Route::post('/login', [AuthController::class, 'login']);  

// Route untuk logout  
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk halaman
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/employee', [EmployeeController::class, 'index'])->name('admin.employee');
    Route::get('/attendance', [AttendanceController::class, 'index'])->name('admin.attendance');
    Route::get('/report', [ReportController::class, 'index'])->name('admin.report');
    Route::get('/upload', [FileUploadController::class, 'index'])->name('admin.upload.index');
    Route::post('/upload', [FileUploadController::class, 'upload'])->name('admin.upload');
});



