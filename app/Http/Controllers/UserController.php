<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $tasks = Task::all();

        return view('app', ['tasks' => $tasks]);
    }

    public function taskCreate()
    {
        $request = request()->validate([
            'name' => ['required', 'max:100'],
            'task' => ['required'],
        ]);

        $user = new User;
        $task = new task;
        
        $user['name'] = $request['name'];
        $user->save();
        
        $task['title'] = $request['task'];
        $task['user_id'] = $user->id;
        $task->save();
        
        return redirect('/');
    }

    public function edit(task $task, $text)
    {
        $task['title'] = $text;
        $task->save();

        return redirect('/');
    }
    
    public function delete(task $task)
    {
        $task->delete();
        return redirect('/');
    }
}
