<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Магазин техники: Пекарня</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('index') }}">Магазин техники: Пекарня</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> <a class="nav-link" href="{{ route('index') }}">Все товары <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('categories') }}">Категории</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('basket') }}">В корзину</a> </li>
            </ul>
            <span class="navbar-text"> Улан у. Нурдин и Асанов Руслан </span>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
