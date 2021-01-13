<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function rastreamento()
    {
        return view('home.rastreamento');
    }
}
