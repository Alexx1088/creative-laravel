<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
    </head>
<body>
<div class="container">
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

             <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('main.index')}}">Main {{--<span class="sr-only">(current)</span>--}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('post.index')}}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about.index')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.index')}}">Contacts</a>
                </li>
            </ul>
        </div>
    </nav>
  {{--  <nav>
        <ul>
            <li><a href="{{ route('main.index') }}"> Main </a></li>
            <li><a href="{{ route('post.index') }}"> Posts </a></li>
            <li><a href="{{ route('about.index') }}"> About </a></li>
            <li><a href="{{ route('contact.index') }}"> Contacts </a></li>
            <li><a href="{{ route('provka.index') }}"> provka </a></li>
                    </ul>
    </nav>--}}

{{--</div>--}}
{{--</div>--}}

<div>

@yield('content')

</div>

</body>
</html>