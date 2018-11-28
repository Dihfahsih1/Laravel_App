<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  href="{{ url('css/bootstrap.css')}}">
        <link rel="stylesheet"  href="{{ url('css/style.css')}}">
        <script type="text/javascript" src="{{ url('js/jquery-3.1.0.js')}}"></script>
        <script type="text/javascript" src="{{ url('js/bootstrap.js')}}"></script>
    </head>
    <body>
         <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <ul class="navbar-nav ml-lg-auto text-lg-right text-center" >
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/create') }}">Create</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                    </ul>
                   
                </div>
            </nav>