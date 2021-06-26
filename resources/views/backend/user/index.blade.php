<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

         @if (session('message'))
         <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
         @endif

    <div class="container">
        <a href="{{ route('users.create') }}" class="btn btn-primary">create user</a>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                 <th>ID</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Email</th>
                 <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                     <tr>
                         <td>{{ $user->id }}</td>
                         <td>{{ $user->first_name }}</td>
                         <td>{{ $user->last_name }}</td>
                         <td>{{ $user->email }}</td>
                         <td>
                             <a href="{{ route('users.show',$user->id) }}" class="btn btn-primary">view</a>
                             <a href="{{ route('users.edit',$user->id) }}" class="btn btn-success">edit</a>
                             <form action="{{ route('users.destroy',$user->id) }}" , method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">delete</button>
                            </form>
                         </td>
                     </tr>
                @endforeach
            </tbody>
         </table>
    </div>


</body>
</html>
