<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update profile page</title>
</head>
<body>

    <h1>Update Profile Page</h1>
     <div>
         <form action="" method="post">
             <div>
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" value="{{ $user->first_name }}">
             </div>
             <br><br>
             <div>
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" value="{{ $user->last_name }}">
             </div>
             <br><br>
             <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ $user->email }}">
             </div>
             <br><br>
             <div>
                 <input type="submit" value="update">
             </div>
         </form>
     </div>
</body>
</html>
