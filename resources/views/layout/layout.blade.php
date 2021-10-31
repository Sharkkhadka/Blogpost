<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <nav class="navigation_bar">
        <ul class="main_nav">
            <li>
                <a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a>
            </li>
            <li>
                <a href="{{route('create')}}"><i class="far fa-clipboard"></i> Create New Post</a>
            </li>
        </ul>
        <ul class="user_nav">
            <li class="login">
                <a href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Login</a>
            </li>
            <li>
                <a href="{{route('register')}}"><i class="fas fa-user-plus"></i> Register</a>
            </li>
        </ul>
    </nav>
        @yield('content')
</body>
</html>