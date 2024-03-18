<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();
        return view('welcome', ['events' => $events]);
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
