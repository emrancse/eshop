<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile Page</title>
</head>
<body>
    <h1>Use Profile Page</h1>

    <div>
        <p><strong>ID: </strong>{{ $user->id }}</p>
        <p><strong>First Name: </strong>{{ $user->first_name }}</p>
        <p><strong>Lastst Name: </strong>{{ $user->last_name }}</p>
        <p><strong>Email: </strong>{{ $user->email }}</p>
        <p><strong>Role: </strong>{{ $user->role }}</p>

    </div>
</body>
</html>
