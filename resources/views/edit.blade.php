<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/add.css') }}">
    <title>Edit Song</title>
</head>
<body>
    <form  action="/updated/{{ $spotifys->id }}" method="POST">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $spotifys->title }}">
        
        <label for="">Singer</label>
        <input type="text" name="singer" value="{{ $spotifys->singer }}">
        
        <label for="">Duration</label>
        <input type="text" name="duration" value="{{ $spotifys->duration }}">

        <label for="">Lyrics</label>
        <textarea name="lyrics" id="" cols="30" rows="10">{{ $spotifys->lyrics }}</textarea>

        <button type="submit">Edit</button>
    </form>
</body>
</html>