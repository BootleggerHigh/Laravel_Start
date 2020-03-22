@extends('master',['title'=>'Задачи']);

@section('content')
<div>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>counter</th>
        </tr>
        @foreach($task as  $value_task)
            <tr>
                <td>{{$value_task->id}}</td>
                <td>{{$value_task->name}}</td>
                <td>{{$value_task->counter}}</td>
                <td><a href="{{action('TasksController@counter_increments',['id'=>$value_task->id])}}">Ссылка</a> </td>
                <td><a href="{{action('LogsController@status',['id'=>$value_task->id])}}">Принять в работу</a> </td>
                <td></td>
            </tr>
        @endforeach
    </table>
    {{empty($id_task)?'' : 'Номер принятой работы : '. $id_task}}
</div>
@endsection
