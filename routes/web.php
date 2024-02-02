<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartOfAccountController;

// Define the resource controller
Route::resource('chart-of-accounts', ChartOfAccountController::class);

Route::get('/', function () {
    return redirect()->route('home');
});

// Display a list of all chart of accounts
Route::get('/chart-of-accounts', [ChartOfAccountController::class, 'index'])->name('chart-of-accounts.index');

// Display a form to create a new chart of account
Route::get('/chart-of-accounts/create', [ChartOfAccountController::class, 'create'])->name('chart-of-accounts.create');

// Store a new chart of account in the database
Route::post('/chart-of-accounts', [ChartOfAccountController::class, 'store'])->name('chart-of-accounts.store');

// Display a form to edit an existing chart of account
Route::get('/chart-of-accounts/{chartOfAccount}/edit', [ChartOfAccountController::class, 'edit'])->name('chart-of-accounts.edit');

// Update an existing chart of account in the database
Route::put('/chart-of-accounts/{chartOfAccount}', [ChartOfAccountController::class, 'update'])->name('chart-of-accounts.update');
Route::patch('/chart-of-accounts/{chartOfAccount}', [ChartOfAccountController::class, 'update']);

// Delete a chart of account from the database
Route::delete('/chart-of-accounts/{chartOfAccount}', [ChartOfAccountController::class, 'destroy'])->name('chart-of-accounts.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
