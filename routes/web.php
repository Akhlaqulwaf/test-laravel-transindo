<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\CarController as UserCarController;
use App\Http\Controllers\User\WecomeController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [WecomeController::class, 'index'])->name('user.welcome');
Route::get('/car-detail/{id}', [UserCarController::class, 'detail'])->name('user.carDetail');

Route::middleware(['auth' ,'CheckRole:user'])->group(function(){
    Route::get('/user/booking', [BookingController::class, 'index'])->name('user.booking');
    Route::post('/user/booking', [BookingController::class, 'index'])->name('user.car.store');

});

Route::middleware(['auth','CheckRole:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/car', [CarController::class, 'index'])->name('admin.car');
    Route::get('/admin/car/tambah', [CarController::class, 'tambah'])->name('admin.car.tambah');
    Route::post('/admin/car/store', [CarController::class, 'store'])->name('admin.car.store');
    Route::get('/admin/car/edit/{id}', [CarController::class, 'edit'])->name('admin.car.edit');
    Route::post('/admin/car/update/{id}', [CarController::class, 'update'])->name('admin.car.update');
    Route::get('/admin/car/delete/{id}', [CarController::class, 'delete'])->name('admin.car.delete');
});
