<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Log;

class LogsController extends Controller
{
    public function show()
    {
        $all_info = Log::getStatusZero();
        return view('logs',['all_info'=>$all_info]);
    }
    public function status($id)
    {
        Log::first()->update(['status'=>1]);
        $all_task = Task::all();
        return view('task',['id_task'=>$id,'task'=>$all_task]);
    }
}
