<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" /> 
        
        <title>Create_opdracht</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
            <a class="navbar-brand mr-1" href="/">Create - Star Wars</a>   
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="/species">Species</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/people">People</a>
                </li>
            </ul>  
        </div>   
        </nav>
        <div class="container">
            @yield('content')
        </div>
            
    </body>
</html>
