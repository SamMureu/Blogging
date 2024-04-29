<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;


class admincontroller extends Controller
{
    public function taskForm()
    {
        $users = User::all();
        return view('admintask', compact('users'));
    }

    public function assignTask(Request $request)
    {
        // Validate the incoming request data...

        $task = new Task();
        $task->user_id = $request->user_id;
        $task->description = $request->description;
        $task->save();

        return redirect()->back()->with('success', 'Task assigned successfully!');
    }
    //
}
