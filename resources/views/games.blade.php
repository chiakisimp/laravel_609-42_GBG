<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-42</title>
</head>
<body>
    <h2>Games list:</h2>
    <table border="1">
        <thead>
            <td>id</td>
            <td>White player</td>
            <td>Black player</td>
        </thead>
    @foreach($games as $game)
        <tr>
            <td>{{$game->id}}</td>
            <td>{{$game->white_name}}</td>
            <td>{{$game->black_name}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>
