<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('events.create');
    }
    public function pontos()
    {
        return view('events.pontos');
    }

    public function login()
    {
        return view('login');
    }

    public function cadastrar()
    {
        return view('cadastrar');
    }
}
