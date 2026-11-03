# Repositório da Apostila: Desenvolvimento Web com Laravel


*Construção de plataforma de turismo e integração de APIs de passagens aéreas*  
Instituto Federal de Minas Gerais (IFMG)

---

## 📁 Estrutura do Repositório

```text
├── ambiente_desenvolvimento.txt            # Documentação e explicação de todos os comandos do Cap. 3
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Controller.php              # Controller base
│   │       ├── PacoteController.php        # Controller do Cap. 5.2 (listar e compact)
│   │       └── AdminController.php         # Controller para rotas protegidas (Cap. 5.3)
│   └── Models/
│       └── Pacote.php                      # Model representativo da arquitetura MVC (Cap. 2)
├── resources/
│   └── views/
│       ├── components/
│       │   └── alerta.blade.php            # Componente Blade <x-alerta> (Cap. 6.2)
│       ├── layouts/
│       │   └── app.blade.php               # Layout Mestre com @yield (Cap. 6.2)
│       ├── pacotes/
│       │   └── lista.blade.php             # View com Blade: {{ }}, @if, @forelse e <x-alerta> (Cap. 6.1 e 6.2)
│       └── sobre.blade.php                 # View estendendo layout mestre com @extends e @section (Cap. 6.2)
└── routes/
    └── web.php                             # Rotas e Verbos HTTP, parâmetros e middlewares (Cap. 5.1, 5.2, 5.3)
```

---

## 🛠️ Conteúdo Implementado

### 1. Arquitetura MVC (Capítulo 2)
- Implementação das camadas **Model** ([`app/Models/Pacote.php`](app/Models/Pacote.php)), **Controller** ([`app/Http/Controllers/PacoteController.php`](app/Http/Controllers/PacoteController.php)) e **View** ([`resources/views/pacotes/lista.blade.php`](resources/views/pacotes/lista.blade.php)).

### 2. Ambiente de Desenvolvimento (Capítulo 3)
- O arquivo [`ambiente_desenvolvimento.txt`](ambiente_desenvolvimento.txt) detalha a função de cada comando para instalação clássica (Composer, Laravel CLI, servidor embutido Artisan) e padronizada com contêineres Docker (Laravel Sail).

### 3. Rotas, Middlewares e Controllers (Capítulo 5)
- Arquivo [`routes/web.php`](routes/web.php) contendo:
  - Rota GET estática: `/sobre-nos`
  - Rota GET com parâmetro dinâmico e tratamento PHP `ucfirst()`: `/destino/{cidade}`
  - Rota mapeada para Controller: `/pacotes` -> `[PacoteController::class, 'listar']`
  - Rota com filtro de segurança / Middleware: `/painel/cadastrar-pacote` com `->middleware('auth')`
  - Rota de atividade prática: `/suporte`

### 4. Views e Blade Templating (Capítulo 6)
- Sintaxe Blade completa idêntica às imagens:
  - Interpolação segura: `<h1>{{ $titulo }}</h1>`
  - Diretivas condicionais: `@if($usuarioEstaLogado) ... @else ... @endif`
  - Laço de repetição com fallback para vazio: `@forelse($pacotes as $pacote) ... @empty ... @endforelse`
  - Layout Base mestre: [`resources/views/layouts/app.blade.php`](resources/views/layouts/app.blade.php) com `@yield('conteudo_principal')`
  - Herança de templates: [`resources/views/sobre.blade.php`](resources/views/sobre.blade.php) com `@extends` e `@section`
  - Componente e passagem de propriedades: [`resources/views/components/alerta.blade.php`](resources/views/components/alerta.blade.php) e invocação com `<x-alerta tipo="..." mensagem="..." />`
