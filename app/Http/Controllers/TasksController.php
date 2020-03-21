<?php

namespace App\Http\Controllers;
use \DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TasksController extends Controller
{
    public function show()
    {
        $info_parcel = DB::table('tasks')->get();
        return view('parcel',compact('info_parcel'));
    }
    public function counter($id)
    {
        $current_counter = DB::table('tasks')
            ->where('id',$id)
            ->value('counter');

        DB::table('tasks')
            ->where('id',$id)
            ->update(['counter'=>$current_counter+1]);
        DB::table('logs')->insert(
            ['task_id'=>$id,'status'=>0]
        );
        return Redirect::to('/parcel');
    }

    public function work()
    {
        $info_work = DB::table('logs')
            ->where('status',0)
            ->orderBy('id','desc')
            ->get();
        return view('info_work',compact('info_work'));
    }
    protected function work_counter($id)
    {
         DB::table('logs')
            ->where('status',0)
            ->limit(1)
            ->update(['status'=>'1']);

      return  Redirect::to('/parcel');
    }
}
