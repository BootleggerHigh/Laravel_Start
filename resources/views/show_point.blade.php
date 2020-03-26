@extends('index')

@section('content')
    <table>
        <tr>
            <th>Название</th>
            <th>Место</th>
            <th>Ссылка</th>
        </tr>
        @foreach($info as $key => $point)
            <tr>
                <td>{{$point->name}}</td>
                <td>{{$point->place}}</td>
                <td><a href="{{action('PlacesController@show_places',['id'=>$point->id])}}">Дополнительная
                        информация {{$point->name}}</a>
                </td>


                @endforeach
                <td>
                   Общее количество лайков за место : {{@count($point->likes)}}
                    Общее количество дизлайков за место : {{@count($point->dislikes)}}
                    <br/>
                    Общее количество лайков за фотографию : {{@count($point->images[$key]->likes)}}
                    Общее количество дизлайков за фотографию : {{@count($point->images[$key]->dislikes)}}
                </td>
            </tr>
    </table>
@endsection
