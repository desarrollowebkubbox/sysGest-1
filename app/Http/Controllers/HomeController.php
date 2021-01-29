<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Tasks;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {

        $this->id = 1;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tareas = DB::table('tasks')->get()->where('user','=',$this->id);

        return view('home')->with('tareas',$tareas);
    }

    public function deleteTask($id)
    { 
        
        $id = $id;
 
        $tasks = DB::table('tasks')->where('id','=',$id)->delete();
        
        return $tasks;
    }

    public function createTask($data)
    { 
        /*
        $id = Auth::user()->id;
 
        $task = new Tasks;
        $task->name = $data->nameCreate;
        $task->description = $data->descriptionCreate;
        $task->state = $data->stateCreate;
        $task->user = Auth::user()->id;
        $task->save();*/
        
         return $data;
    }
}
