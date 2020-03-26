@extends('index')

@section('content')
    <form action="{{route('post.assessment')}}" method="POST">
        @csrf
        @method('POST')
        <table>
            <tr>
                <th>Название</th>
                <th>Место</th>
                <th>Фотографии</th>
                <th>Примечание</th>
            </tr>
            <tr>
                <td>
                    {{$info->name}}
                </td>
                <td>
                    {{$info->place}}
                </td>
                <td>
                    @if(!empty($image))
                        @foreach($image as $key => $images)
                            <br/>
                            <img src="{{asset('storage/'.$images)}} " alt="Картинка" width="100" height="100">
                            <br/>
                            Количество лайков за фотографию  {{@count($info->images[$key]->likes)}}
                            <button type="submit" name='like_photo' value="{{$info->images[$key]->name}}">+1</button>
                            <br/>
                            Количество дизлайков за фотографию {{@count($info->images[$key]->dislikes)}}
                            <button type="submit" name="dislike_photo" value="{{$info->images[$key]->name}}">+1</button>
                        @endforeach
                    @else
                        Фотографии отсутствуют
                    @endif
                </td>
                <th>
                    @if(!empty($extra))
                        @foreach($extra as $extr)
                            @if(!empty($extr->name))
                                {{$extr->name}}
                            @else
                                Примечание отсутствует
                            @endif
                            <br/>
                        @endforeach
                    @else
                        Примечание отсутствует
                    @endif
                </th>
                <th>
                    Количество лайков за место : {{@count($info->likes)}}
                    <button type="submit" name="like_place" value="{{$info->name}}">+1</button>
                    Количество дизлайков за место : {{@count($info->dislikes)}}
                    <button type="submit" name="dislike_place" value="{{$info->name}}">+1</button>
                </th>
            </tr>
        </table>
    </form>
@endsection
