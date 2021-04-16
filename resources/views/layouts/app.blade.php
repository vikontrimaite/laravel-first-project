<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
            <!-- čia href tiesiog /, nes main puslapis yra home -->
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
            <!-- dashboard gali būti matomas tik prisijungusiems vartotojams, dėl to jam reikia pritaikyti middleware -->
                <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="p-3">Posts</a>
            </li>
        </ul>

        <ul class="flex items-center">

            <!-- when signed in - auth and endauth -->
            @auth
            <li>
                <a href="" class="p-3 font-bold">Welcome back, {{ auth()->user()->name }}!</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post" class="inline p-3">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @endauth

            <!-- not signed in -->
            @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>

            @endguest

        </ul>
    </nav>
    @yield('content')
</body>

</html>
