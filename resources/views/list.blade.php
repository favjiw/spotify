<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2b7eddacef.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/list.css') }}">
    <title>Music List</title>
</head>
<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Singer</th>
            <th>Duration</th>
            <th>Action</th>
        </tr>
        <tbody>
            @foreach ($spotifys as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->singer }}</td>
                <td>{{ $item->duration }}</td>
                <td id="action"> 
                    <a href="/detail/{{ $item->id }}"><i class="fa-solid fa-eye"></i></a>
                    <a href="/edit/{{ $item->id }}"><i class="fa-solid fa-square-pen"></i></a>
                    <form action="{{ url('/list',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i class="fa-solid fa-ban"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <a href="/add">Add Song</a>
    </table>
</body>
</html>