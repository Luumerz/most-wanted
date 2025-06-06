<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriminalController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/criminales', function () {
//     return view('criminales.index');
// });

// Route::get('/criminales/create', [CriminalController::class, 'create']);

Route::resource('criminales', CriminalController::class);