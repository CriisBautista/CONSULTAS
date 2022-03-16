<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach($co as $coli)
            <a href="{{route('ver.municipio', $coli['Id'])}}">{{$coli['asentamiento']}}</a><br>
        @endforeach
    </div>
</body>
</html>