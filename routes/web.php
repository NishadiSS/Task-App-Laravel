<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontendcontroller;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/about', [FrontendController::class, 'indexaboutus']);

//Route::get('/contact', [FrontendController::class, 'indexcontactus']);

Route::get('/tasks',function(){
    $data=App\Models\Tasks::all();
    return view('tasks')->with('tasks',$data);
});

Route::post('/saveTask', [Frontendcontroller::class, 'store']);

Route::get('/markascompleted/{id}',[FrontendController::class, 'UpdateTasksCompleted']);