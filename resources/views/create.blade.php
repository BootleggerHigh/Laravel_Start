<form action="/create" method="POST">
    @csrf
    @method("post")
    <input type="text" placeholder="Введите место" name="name" value="{{old('point')}}">
    <select name="type">
        <option  value="Парк">Парк</option>
        <option  value="Автостоянка">Автостоянка</option>
        <option  value="Озеро">Озеро</option>
    </select>
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
