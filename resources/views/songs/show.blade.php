<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <P class="font-mono text-blue-600">Songs:</P>

    <ul class="font-mono text-blue-600">
        @foreach($songs as $song)
        <li>{{$song}}</li>
        @endforeach
    </ul>
</body>
</html>