<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/detail.css') }}">
    <title>Music Detail</title>
</head>
<body>
    <a href="/list">back</a>
    <div class="mid-section">
        <div class="title">
            <div class="pics"></div>
            <div class="col-info">
                <h1>{{ $spotifys->title }}</h1>
                <h3>{{ $spotifys->singer }}</h3>
                <h4>{{ $spotifys->duration }}</h4>
                <audio controls src="{{ URL::asset('audio/') }}"></audio>
            </div>
        </div>
        <p>{{ $spotifys->lyrics }}</p>
    </div>
</body>
</html>