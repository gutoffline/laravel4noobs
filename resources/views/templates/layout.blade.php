<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title',env('APP_NAME'))</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        @include('templates.logo')
        
        <hr>
        @yield('content', 'Ola pessoal')

        @yield('scripts', 'meus scripts')
    </div>
</body>
</html>


