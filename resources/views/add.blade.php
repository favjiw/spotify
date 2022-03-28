<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/add.css') }}">
    <title>Add Song</title>
</head>
<body>
    <form action="{{ url('added') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title">
        
        <label for="">Singer</label>
        <input type="text" name="singer">
        
        <label for="">Duration</label>
        <input type="text" name="duration">

        <label for="">Lyrics</label>
        <textarea name="lyrics" id="" cols="30" rows="10"></textarea>

        <label for="">Audio</label>
        <input type="file" name="audio">
        
        <button type="submit">Add</button>
    </form>
</body>
</html>