<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-42</title>
</head>
<body>
    <h2>{{$game ? "List of moves for game ".$game->white_name." VS ".$game->black_name : 'Wrong game ID'}}</h2>
    @if($game)
        <table border="1">
            <tr>
                <td>id</td>
                <td>Source</td>
                <td>Dest</td>
            </tr>
            @foreach($game->moves as $move)
                <tr>
                    <td>{{$move->id}}</td>
                    <td>{{trim($move->source->letter).$move->source->digit}}</td>
                    <td>{{trim($move->dest->letter).$move->dest->digit}}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
