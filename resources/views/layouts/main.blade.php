<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka" rel="stylesheet">
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
        <!-- JS -->
        <script src="/js/main.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/imgs/logo.png" alt="Virtual Town">
                    </a>
                    <ul class="navbar-nav">
                        @auth
                        <li class="nav-item">
                            <a href="/applications/listApplication" class="nav-link">Online Applications</a>
                        </li>
                        <li class="nav-item">
                            <a href="/applications/archivedApplication" class="nav-link">Archived Applications</a>
                        </li>
                        <li class="nav-item">
                            <a href="/applications/createApplication" class="nav-link">Create Application</a>
                        </li>
                        <li class="nav-item">
                            <a href="/applications/listUsers" class="nav-link">Registered Users</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"></a>
                        </li>
                        <li class="nav-item">
                            <a href="" style="color: #2599c0" class="nav-link">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" 
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Logout
                            </a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Login</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            <p>VirtualTown &copy; 2022</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>

