<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home/home');
    }

    public function Administrador()
    {
        return view('common/head').
        view('common/menu').
        view('administrador/opciones.html').
        view('common/footer');
    }
}
