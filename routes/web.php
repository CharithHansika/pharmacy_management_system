<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\CashierController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('owner/dashboard', [HomeController::class, 'ownerDashboard'])->middleware(['auth','owner']);
Route::get('manager/dashboard', [HomeController::class, 'managerDashboard'])->middleware(['auth','manager']);
Route::get('cashier/dashboard', [HomeController::class, 'cashierDashboard'])->middleware(['auth','cashier']);


Route::get('owner/add-customer', [OwnerController::class, 'addCustomer'])->middleware(['auth','owner'])->name('add-customer');
Route::get('owner/add-item', [OwnerController::class, 'addItem'])->middleware(['auth','owner'])->name('add-item');
Route::post('owner/addCustomerSubmit', [OwnerController::class, 'submitaddCustomer'])->middleware(['auth','owner'])->name('SubmitAddCustomer');
Route::post('owner/addItemSubmit', [OwnerController::class, 'submitaddItem'])->middleware(['auth','owner'])->name('SubmitAddItem');


Route::get('manager/dashboard', [ManagerController::class, 'showCustomerDetails'])->name('customer.details');

Route::get('cashier/dashboard', [CashierController::class, 'showItemDetails'])->name('item.details');
Route::get('cashier/dashboard/{id}/edit', [CashierController::class, 'editItemDetails'])->name('item.edit');
Route::put('cashier/dashboard/{id}', [CashierController::class, 'updateItemDetails'])->name('item.update');
// web.php

Route::delete('cashier/dashboard/{id}', [CashierController::class, 'deleteItem'])->name('item.delete');




// Route::get('manager/dashboard/{id}', [ManagerController::class, 'showCustomerDetails'])->name('customer.details');
Route::get('manager/dashboard/{id}/edit', [ManagerController::class, 'editCustomerDetails'])->name('customer.edit');
Route::put('manager/dashboard/{id}', [ManagerController::class, 'updateCustomerDetails'])->name('customer.update');
// web.php

Route::delete('manager/dashboard/{id}', [ManagerController::class, 'deleteCustomer'])->name('customer.delete');
