<html>
<head>
    <title>Movie Land - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/">MovieLand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Movies<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/actors">Actors</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="{{route('search')}}">
                @csrf
                <input class="form-control mr-sm-2" type="search" name="query" id="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
@show

<div class="container">
    @yield('content')
</div>

{{--<footer class="footer">--}}
{{--    <div class="container">--}}
{{--        <span class="text-muted">© 2020 Copyright: <span><a href="https://www.linkedin.com/in/sophie-teboul/"> Sophie Teboul</a></span></span>--}}
{{--    </div>--}}
{{--    </footer>--}}
<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted"><span class="text-muted">© 2020 Copyright: <span><a href="https://www.linkedin.com/in/sophie-teboul/"> Sophie Teboul</a></span></span>
</span>
    </div>
</footer>
</body>
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>--}}
</html>

