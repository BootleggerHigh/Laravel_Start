@extends('index')

@section('content')
<table>
    <tr>
        <th>Название</th>
        <th>Тип</th>
        <th>Ссылка</th>
    </tr>
        @foreach($info as $point)
        <tr>
                <td>{{$point->name}}</td>
                <td>{{$point->type}}</td>
                <td><a href="{{action('PlacesController@show_places',['id'=>$point->id])}}">Дополнительная
                        информация   {{$point->name}}</a></td>
        </tr>
        @endforeach

</table>
@endsection
