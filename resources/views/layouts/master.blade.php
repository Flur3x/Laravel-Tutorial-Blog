<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Blog Template for Bootstrap</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/blog.css">
</head>

<body>
    @include('layouts.nav')

    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                @yield('content')
            </div>

            <div class="col-sm-3 offset-sm-1 blog-sidebar">
                @include('layouts.sidebar')
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
