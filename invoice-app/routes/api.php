<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('get_all_invoice', [InvoiceController::class, 'get_all_invoice']);
Route::get('search_invoice', [InvoiceController::class, 'search_invoice']);
Route::get('create_invoice', [InvoiceController::class, 'create_invoice']);