@extends('layouts.app')

@section('conteudo_principal')
    <!-- Exibição de variável com sanitização automática (Capítulo 6.1) -->
    <h1>{{ $titulo }}</h1>

    <!-- Chamando o componente e injetando propriedades (Capítulo 6.2) -->
    <x-alerta tipo="sucesso" mensagem="Reserva confirmada com sucesso!" />
    <x-alerta tipo="erro" mensagem="Desculpe, limite do cartão excedido." />

    <!-- Condicionais no Blade (@if / @else) (Capítulo 6.1) -->
    @if($usuarioEstaLogado ?? false)
        <p>Bem-vindo de volta, cliente VIP!</p>
    @else
        <a href="/login">Faça login para ver as promoções.</a>
    @endif

    <!-- Laços de repetição avançados (@forelse) (Capítulo 6.1) -->
    <ul>
        @forelse($pacotes as $pacote)
            <li>{{ $pacote }}</li>
        @empty
            <p>Infelizmente não temos pacotes promocionais hoje.</p>
        @endforelse
    </ul>
@endsection
