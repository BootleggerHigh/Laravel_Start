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
    @if ((!empty($info_work)) && isset($info_work))
        @foreach ($info_work as $key=> $work)
            @foreach($work as $key => $current_work)
                @if($current_work!== null)
               <tr>
                   <td>{{$key}}</td>
                   <th>{{$current_work}}</th>
               </tr>
                @endif
            @endforeach
        @endforeach
            @endif
</table>
</body>
</html>
