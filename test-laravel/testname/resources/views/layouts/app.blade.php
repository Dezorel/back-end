<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>
        @yield('title-page')
    </title>
</head>
<body>
    @include('inc.navbar')

    @if(!Request::is('/'))  <!--Проверка условия (если на странице такой-то)... странно, метод реагирует только на main page-->
    @include('inc.hero')    <!--Делаю так что бы данный блок показывался только на странице ABOUT-->
    @endif  <!--Обязательно закрывать условия!-->

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-4">
                @include('inc.aside')   <!--Подключение кусочка кода-->
            </div>
        </div>
    </div>



    @include('inc.footer')
</body>
</html>
