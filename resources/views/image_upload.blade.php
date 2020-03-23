<form  action="/places/{{$id}}/photos/add" method="POST" enctype="multipart/form-data" >
    @csrf
    @method('post')
    <input type="file" name="file[]" multiple>
    <button type="submit">Загрузить</button>
</form>
