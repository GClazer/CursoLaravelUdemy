<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sobreNos()
    {
        return view('sobre');
    }

    public function contato()
    {
        return view('contato');
    }

    public function login()
    {
        return view('login');
    }

    public function clientes()
    {
        return view('app.clientes');
    }

    public function fornecedores()
    {
        return view('app.fornecedores');
    }

    public function produtos()
    {
        return view('app.produtos');
    }
}
