@extends('layouts.app') <!--Прописываю откуда берётся шаблон папка.название-->

@section('title-page')
    This is main page
@endsection

@section('content')     <!--В какой блок кода вставляем ниженаписанный код-->
    <h1>Main page</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid deleniti
    distinctio dolorem eum facilis fugit ipsa neque odio, optio pariatur possimus quasi qui,
    reprehenderit, voluptates. Exercitationem illo quisquam sint.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid deleniti
    distinctio dolorem eum facilis fugit ipsa neque odio, optio pariatur possimus quasi qui,
    reprehenderit, voluptates. Exercitationem illo quisquam sint.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid deleniti
    distinctio dolorem eum facilis fugit ipsa neque odio, optio pariatur possimus quasi qui,
    reprehenderit, voluptates. Exercitationem illo quisquam sint.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid deleniti
    distinctio dolorem eum facilis fugit ipsa neque odio, optio pariatur possimus</p>
@endsection

@section('aside')
    @parent <!--Отображаю всё из секции-->
    <p>Я очень старался делая этот сайт и заполняя текстовые
    поля на данном сайте :)</p>     <!--Подключаем дополнительный текст или что угодно-->
@endsection



