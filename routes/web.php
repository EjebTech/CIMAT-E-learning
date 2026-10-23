<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\DashboardAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('accueil', function () {
//     return view('index');
// });

Route::get('accueil', [AccueilController::class,'index']);

Route::get('Dashboard', [DashboardAdminController::class, 'DashboardAdmin']);