<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <script type="text/javascript" src="{{asset('bootstrap.min.js')}}"></script>
    <title>Adithya Visnu Prasetyo Putra</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('stocks.index') }}">My Stocks Collection</a>
                </li>
                <li class="nav-item">
                    @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="submit" value="Logout">
                    </form>
                    @endauth
                    @guest
                    <a class="nav-link" href="{{ route('auth')}}">Register | Login</a>  
                    @endguest
                </li>
            </ul>
            </div>
        </div>
    </nav>
</body>
</html>