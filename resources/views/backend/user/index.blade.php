<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users list</title>
</head>
<body>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->id}}, {{$user->first_name}}, {{ $user->last_name }}, {{ $user->email }}, {{ $user->role }},{{ $user->created_at }}</li>
        @endforeach
    </ul>
</body>
</html>
