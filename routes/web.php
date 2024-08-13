<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

// Route::get('/', function () {
//     return view('welcome');
// });

# Basic Route
Route::get('/', [AppController::class, 'index']);

# Route with Parameter
Route::get('/about/{paramname}', [AppController::class, 'about']);

# Route with optional parameter
Route::get('/services/{paramname?}', function(){
    return "<h1>Hello from services!</h1>";
});
