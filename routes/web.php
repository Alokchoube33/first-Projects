<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});
// 
Route::get('/customers/index', [CustomersController::class, 'index'])->name('customers.index');

Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
Route::post('/index', [CustomersController::class, 'store'])->name('customers.store');
Route::get('/index/{id}', [CustomersController::class, 'show'])->name('customers.show');
Route::get('/index/{id}/edit', [CustomersController::class, 'edit'])->name('customers.edit');
Route::put('/index/{id}', [CustomersController::class, 'update'])->name('customers.update');
Route::delete('/index/{id}', [CustomersController::class, 'destroy'])->name('customers.destroy');
?>