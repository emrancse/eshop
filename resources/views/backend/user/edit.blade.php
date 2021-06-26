<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Update Page</title>
</head>
<body>
     <form action="{{ route('users.update',$user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="First Name">First Name</label>
             <input type="text" name="first_name" value="{{ $user->first_name }}"><br><br>
        </div>

        <div>
            <label for="Last Name">Last Name</label>
             <input type="text" name="last_name" value="{{ $user->last_name }}"><br><br>
        </div>

        <div>
            <label for="email">Email</label>
             <input type="email" name="email" value="{{ $user->email }}"><br><br>
        </div>

        <div>
            <label for="password">Password</label>
             <input type="password" name="password"><br><br>
        </div>

        <div>
            <label for="role">Role</label>
             <select name="role" id="role">
                 <option value="admin">Admin</option>
                 <option value="employee">Employee</option>
                 <option value="customer support">Customer Support</option>
             </select><br><br>
        </div>
        <div>
            <input type="submit" value="update user">
        </div>
    </form>
</body>
</html>
