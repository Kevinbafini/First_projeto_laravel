<!DOCTYPE html>
<html lang="pt-br{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
    <h1>titulo</h1>
    <img src="/img/banner.jpeg" alt="">
        @if($nome == "pedro")
        <p>O nome é pedro</p>
        @elseif($nome == "kevin")
        <p>O nome é {{ $nome }} tem {{ $idade }} anos e trabalha de {{ $trabalho }}</p>
        @else
        <p>O nome não é pedro</p>
        @endif

        @for ($i = 0; $i < count($array); $i++)
            <p>{{ $array[$i]}} - {{ $i }}</p>
        @endfor

        @php

            $name = "Kevin";
            echo $name

        @endphp

        @foreach($nomes as $nome)
            <p>{{$loop -> index}}</p>
            <p>{{$nome}}</p>
        @endforeach

    </body>
</html>
