<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskController extends Controller
{
    public function store(Request $request){
        dd($request->all());
        //$task=new Task;
        //$task->task=$request->task;
        //$task->save();

    }
}
