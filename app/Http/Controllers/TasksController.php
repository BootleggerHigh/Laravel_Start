<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Log;
use Illuminate\Support\Facades\Redirect;

class TasksController extends Controller
{
    public function  index()
    {
        $all_task = Task::all();
        return view('task', ['task'=>$all_task]);
    }
    public function counter_increments($id)
    {
        Task::findOrFail($id)->increment('counter');
        Log::create(['task_id'=>$id,'status'=>0]);
        return Redirect::to('/');
    }
}
