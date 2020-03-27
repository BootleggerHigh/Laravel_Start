@extends('index')

@section('content')
    <form action="{{route('place.update',$model)}}" method="POST">
        @csrf
        @method("PATCH")
        <input type="text" placeholder="Введите название" name="type_name" value="{{$model->name}}">
        <label for="type">
            Место :
            <select name="type">
                <option value="Парк">Парк</option>
                <option value="Автостоянка">Автостоянка</option>
                <option value="Озеро">Озеро</option>
            </select>
        </label>
        <button type="submit">Добавить</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection()
