<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        list() = array('Café', 'marrom', 'cafeína');
        return view('home');
    }
}
