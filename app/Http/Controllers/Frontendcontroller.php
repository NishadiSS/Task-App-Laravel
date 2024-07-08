<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tasks;
use Illuminate\Foundation\Validation\ValidatesRequests;


class Frontendcontroller extends Controller
{

    use ValidatesRequests;

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

    public function UpdateTasksAsCompleted($id){
        $task=Tasks::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();
    }

    public function UpdateTasksAsNotCompleted($id){
        $task=Tasks::find($id);
        $task->iscompleted=0;
        $task->save();
        return redirect()->back();
    }

    public function DeleteTask($id){
        $task=Tasks::find($id);
        $task->delete();
        return redirect()->back();
    }

    public function UpdateTaskView($id){
        $task=Tasks::find($id);
        return view('updatetask')->with('taskdata',$task);
    }

    public function UpdateTask(Request $request){
        //dd($request);
        $id=$request->id;
        $task=$request->task;
        $data=Tasks::find($id);
        $data->task=$task;
        $data->save();
        $datas=Tasks::all();
        return view('tasks')->with('tasks',$datas);

    }

}
