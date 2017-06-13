<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{

    public function index()
    {
    
    //$tasks = DB::table('tasks')->get();  Laravel query builder

    $tasks = task::all();

    return view('tasks.testRoutes', compact('tasks'));

    }

    // public function show($id)
    // {        
    
    // $task = task::find($id);

    // return view('tasks.show', compact('task'));

    // }

    public function show(Task $id)
    {        

    return view('tasks.show', compact('task'));

    }


}
