<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Информация о посылке</title>
</head>
<body>
<table>
    @if ((!empty($info_parcel)) && isset($info_parcel))
        @foreach ($info_parcel as  $parcel)
            @foreach($parcel as $key => $current_parcel)
                <tr>
                    <td>{{$key}}</td>
                    <th>{{$current_parcel}}</th>
            @endforeach
                <th><a href={{action('TasksController@counter',['id'=>$parcel->id])}}>Ссылка</a></th>
                    <th><a href={{action('TasksController@work_counter',['id'=>$parcel->id])}}>status=1</a></th>
                </tr>
        @endforeach
    @endif
</table>
</body>
</html>
