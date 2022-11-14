<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/admin/admin-login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Admin Login</title>

</head>
<body>
    <div class="container">

        <form action="{{ route('admin.post.login') }}" method="POST">
            <h3>Admin Login</h3>
            @csrf

            <div><label for="email">email</label></div>
            <input type="text" name="email" id="email">

            <div><label for="email">Password</label></div>
            <input type="password" name="password" id="password">
            
            <button type="submit" class="btn-primary">Login</button>
        </form>
    </div>
</body>
</html>