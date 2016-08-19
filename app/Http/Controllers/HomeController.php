<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $codigo = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
        return view('home')->with("teste", $codigo);
    }
}
