<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="row justify-content-center min-vh-100 align-items-center">
    <div class="col-3 ">
        <h4 class="text-center text-danger text-decoration-underline ">NEED TO LOGOUT</h4>
        <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit" class="btn  btn-danger text-white p-2 d-block mx-auto mt-3">Logout</button>
        </form>
    </div>
   </div>
</body>
</html>