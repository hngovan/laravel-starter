<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>day la product</h1>
    {{-- <h2>{{ $title }}</h2>
    <h2>{{ $x }}</h2>
    <h2>{{ $y }}</h2> --}}
    <a href="{{ route('products') }}">link products</a>
    @foreach ($my_phone as $item)
    <h3>
        {{$item}}
    </h3>
    @endforeach
</body>
</html>
