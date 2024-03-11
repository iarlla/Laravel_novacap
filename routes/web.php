<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $nome = "Matheus";
    $idade = 29;
    $profissao = "Programador";

    $arr = [1, 2, 3, 4, 5];

    $nomes = ["Pedro", "Tiago", "João", "Matheus"];

    return view(
        'welcome',
        [
            'nome' => $nome,
            'idade2' => $idade,
            'profissao' => "programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]
    );
});

Route::get('/contact', function () {
    return view('contact');
});
