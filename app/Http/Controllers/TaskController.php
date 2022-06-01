<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        return view('index', ['tasks' => Task::all()]);
    }

    public function addTask()
    {
        return view('add-task');
    }

    public function addNewTask(Request $request){
        Task::create([
            'title' => $request->title,
            'details' => $request->details,
            'priority' => $request->priority,
        ]);


        return redirect('index');
    }

    public function editTask()
    {
        return view('edit-task');
    }
}
