@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

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

        @endsection
