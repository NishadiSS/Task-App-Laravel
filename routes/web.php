<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontendcontroller;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/about', [FrontendController::class, 'indexaboutus']);

//Route::get('/contact', [FrontendController::class, 'indexcontactus']);

Route::get('/tasks',function(){
    return view('tasks');
});

Route::post('/saveTask', [Frontendcontroller::class, 'store']);