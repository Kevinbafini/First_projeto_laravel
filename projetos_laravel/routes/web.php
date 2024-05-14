<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "kevin";
    $idade = "18";
    $trabalho = "Programador";
    $array = [1, 2, 3, 4 , 5 ];

    $nomes = ["Matheus", "Maria", "Pedro"];

    return view('welcome',
    [
    'nome' => $nome,
    'idade' => $idade,
    'trabalho' => $trabalho,
    'array' => $array,
    'nomes' => $nomes
    ]);
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/contact', function () {
    return view('contatos');
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
