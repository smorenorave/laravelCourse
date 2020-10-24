<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        //aqui va ir el codigo de cargas de la pestaña home
        return view('home.index');
    }

    public function contact()
    {
        return view('home.contact');
    }

}
