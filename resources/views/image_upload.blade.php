@extends('index')

@section('content')
    <form action="{{route('post.image_places')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        <label for="id_type">
            Название места :
            <select name="id">
            @foreach($objects as $object)
                    <option value="{{$object->id}}">
                        {{$object->name}}
                    </option>
                    @endforeach
                </select>

        </label>
        <label for="file">
            Выбор фотографий
            <input type="file" name="file[]" multiple>
        </label>
        <label for="name_image">
            <br/>
            Имя для фотографий
            <input type="text" placeholder="Введите имя фотографий" name="name_image">
        </label>
        <button type="submit">Загрузить</button>
    </form>
@endsection
