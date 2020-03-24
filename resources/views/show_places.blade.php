@extends('index')

@section('content')
<table>
    <tr>
        <th>Название</th>
        <th>Тип</th>
        <th>Фотографии</th>
    </tr>
    <tr>
        <td>
            {{$info->name}}
        </td>
        <td>
            {{$info->type}}
        </td>
        <td>
            @foreach($image as $images)
                <img src="{{asset('storage/'.$images)}}" alt="Картинка">
                @endforeach
        </td>
    </tr>
</table>
@endsection
