<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Exibe o formulário de cadastro de pacote (área restrita protegida por middleware 'auth')
     */
    public function create()
    {
        return view('admin.cadastrar-pacote');
    }
}
