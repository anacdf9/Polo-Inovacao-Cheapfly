<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    /**
     * Modelo conceitual demonstrando a arquitetura MVC (Capítulo 2)
     * e sua aplicação na Agência de Turismo.
     *
     * O Model é a camada responsável pela lógica de dados,
     * regras de negócio e comunicação com o banco de dados via Eloquent ORM.
     */
    protected $fillable = [
        'destino',
        'preco',
        'disponivel',
    ];

    /**
     * Exemplo de regra de negócio no Model:
     * Verifica e retorna pacotes em promoção ou aplica descontos.
     */
    public static function obterPromocoes()
    {
        return [
            'Paris',
            'Maldivas',
            'Fernando de Noronha'
        ];
    }
}
