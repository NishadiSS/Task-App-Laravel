<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tasks;
use Illuminate\Foundation\Validation\ValidatesRequests;


class Frontendcontroller extends Controller
{

    use ValidatesRequests;

    public function indexaboutus(){
        return view('aboutus');
    }

    public function indexcontactus(){
        return view('contactus');
    }

    public function indextasks(){
        return view('tasks');
    }

    public function store(Request $request){
        //dd($request->all());
        $task=new Tasks;
        $this->validate($request,['task'=>'required|max:100|min:5',]);
        $task->task=$request->task;
        $task->save();
        $data=Tasks::all();
        //dd($data);
        //return redirect()->back();
        return view('tasks')->with('tasks',$data);

    }

    public function UpdateTasksCompleted($id){
        $task=Tasks::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();
    }
}
