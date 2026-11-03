<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// O Model App\Models\Pacote seria importado aqui

class PacoteController extends Controller
{
    public function listar()
    {
        // 1. O Controller pede dados ao banco (Simulação)
        $titulo = "Viagens em Promoção";
        $pacotes = ['Paris', 'Maldivas', 'Fernando de Noronha'];

        // 2. Envia os dados para a View usando o compact()
        return view('pacotes.lista', compact('titulo', 'pacotes'));
    }
}
