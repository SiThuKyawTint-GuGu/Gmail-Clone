<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('user/login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('user/login/css/style.css')}}">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
       @yield('content')

        <!-- Sing in  Form -->
    </div>

    <script src="{{asset('user/login/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('user/login/js/main.js')}}"></script>
</body>
</html>