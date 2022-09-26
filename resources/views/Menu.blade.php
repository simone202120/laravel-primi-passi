<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <H1>{{$titolo}}</H1>
    <ul>
        @foreach($menu as $singolaVoce)
            <li><a href="#">{{$singolaVoce}}</a></li>
        @endforeach
    </ul>
</body>
</html>