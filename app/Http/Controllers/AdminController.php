<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('pages.admin.login');
    }

    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function clientes()
    {
        return view('pages.admin.clientes.index');
    }

    public function clienteShow($id)
    {
        return view('pages.admin.clientes.show', ['id' => $id]);
    }
}
