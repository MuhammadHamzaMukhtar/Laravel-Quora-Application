<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('cs/style.css')}}">
</head>

<body class="antialiased">
    <div id="particles-js">

        <div class="particle-div">
            <div class="d-flex">
                <img src="{{asset('images/quora.png')}}" width="100px" height="100px" alt="">
                <h1 class="text-dark fw-bolder mt-4"><span class="text-danger">L</span>aravel <span class="text-danger">Q</span>uora <span class="text-danger">A</span>pplication</h1>
            </div>
            <div class="d-flex justify-content-center">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 btn btn-danger">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500  btn btn-danger">Log in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 btn btn-secondary">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>

    </div>

    <script src="{{asset('js/particles.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>