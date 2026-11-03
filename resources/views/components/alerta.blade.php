@props(['tipo' => 'info', 'mensagem' => ''])

<div class="alerta alerta-{{ $tipo }}">
    {{ $mensagem }}
</div>
