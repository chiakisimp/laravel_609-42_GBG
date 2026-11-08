<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-42</title>
</head>
<body>
    <h2>{{$user ? "List of ".$user->name."'s favorite games" : "Wrong user ID"}}</h2>
    @if($user)
    <table border="1">
        <tr>
            <td>id</td>
            <td>White player</td>
            <td>Black player</td>
        </tr>
        @foreach($user->games as $game)
            <tr>
                <td>{{$game->id}}</td>
                <td>{{$game->white_name}}</td>
                <td>{{$game->black_name}}</td>
            </tr>
        @endforeach
    </table>
    @endif
</body>
</html>
