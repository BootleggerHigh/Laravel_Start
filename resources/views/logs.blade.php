@extends('master',['title'=>'Логи']);

@section('content')
<div>
    <table>
        <tr>
            <th>id</th>
            <th>task_id</th>
            <th>status</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        @foreach($all_info as  $value_log)
            <tr>
                <td>{{$value_log->id}}</td>
                <td>{{$value_log->task_id}}</td>
                <td>{{$value_log->status}}</td>
                <td>{{$value_log->created_at}}</td>
                <td>{{$value_log->updated_at}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
