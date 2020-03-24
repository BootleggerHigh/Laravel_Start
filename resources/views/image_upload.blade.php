@extends('index')

@section('content')
<form action="{{route('post.image_places')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')
    <label>
        Выбор места для загрузки фотографий
        <select name="id">
            @foreach($objects as $object)
                <option value="{{$object->id}}">{{$object->name}}</option>
            @endforeach
        </select>
    </label>
    <input type="file" name="file[]" multiple>
    <button type="submit">Загрузить</button>
</form>
@endsection
