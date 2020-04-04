<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$user->name}} {{env('APP_NAME')}}</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/home.css') }}>
</head>

<body>
    <x-navbar />
    <div class="wrapper">
        @yield('navbar')
        <div class="jumbotron container mt-4">
            <h1 class="display-4">{{$user->name}}</h1>
            <p class="lead">

            </p>
            <hr class="my-4">
            <p>{{is_null($user->description) ? '404 description not found' :$user->description }}
            </p>
            @auth
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Edit Profile</a>
            </p>
            @endauth
            @guest
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">+ Follow</a>
            </p>
            @endguest


        </div>
    </div>
</body>

</html>