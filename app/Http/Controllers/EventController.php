<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $nome = "vitoir";

        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        $names = ['vitor', 'gabriel', 'mariotto', 'moreira'];

        return view('welcome', ['nome' => $nome, 'arr' => $arr, 'names' => $names]);
    }

    public function create(){
        return view('events.create');
    }
}
