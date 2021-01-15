@extends('layouts.app') <!--Прописываю откуда берётся шаблон папка.название-->

@section('title-page')
    This is main page
@endsection

@section('content')     <!--В какой блок кода вставляем ниженаписанный код-->
    <h1>Main page</h1>
@endsection

@section('aside')
    @parent <!--Отображаю всё из секции-->
    <p>Дополнительный текст</p>     <!--Подключаем дополнительный текст или что угодно-->
@endsection



