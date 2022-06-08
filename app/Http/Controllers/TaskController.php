<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    //
    public function index()
    {
        return view('index', ['tasks' => Task::all()]);
    }

    public function addTask(){
        $users = User::all();

        return view('add-task', compact('users'));
    }

    public function addNewTask(Request $request){
        Task::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'details' => $request->details,
            'priority' => $request->priority,
        ]);


        return redirect(route('index'));
    }

    public function editTask($id)
    {
        $users = User::all();
        $task = Task::find($id);

        return view('edit-task', compact('task', 'users'));
    }

    public function updateTask(Request $request, $id){
        $task = Task::find($id);
        // $task->update([
        //     'title' => $request->title,
        //     'details' => $request->details,
        //     'priority' => $request->priority,
        // ]);
        $task->user_id = $request->user_id;
        $task->title = $request->title;
        $task->details = $request->details;
        $task->priority = $request->priority;
        $task->save();

        return redirect(route('index'));
    }

    public function deleteTask($id){
        $task = Task::find($id);
        $task->delete();

        return redirect(route('index'));
    }
}
