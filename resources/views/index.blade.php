<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employee</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
                <h5 class="my-0 mr-md-auto font-weight-normal">Employee</h5>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 text-dark" href="#">Features</a>
                    <a class="p-2 text-dark" href="#">Enterprise</a>
                    <a class="p-2 text-dark" href="#">Support</a>
                    <a class="p-2 text-dark" href="#">Pricing</a>
                </nav>
                @if (Route::has('login'))
                    <div class="navbar">
                        @auth
                            <a class="btn btn-outline-primary" href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <nav class="my-2 my-md-0 mr-md-3">
                                <a class="p-2 text-dark" href="{{ route('login') }}">Login</a>
                                @if (Route::has('register'))
                                    <a class="p-2 text-dark" href="{{ route('register') }}">Register</a>
                                @endif
                            </nav>
                        @endauth
                    </div>
                @endif
            </div>
        <div class="container">
            <h3>Employee Management System</h3>
            <div class="card">
                <div class="card-header">
                    Hello
                </div>
            </div>
        </div>
    </body>
</html>
