@extends('welcome')
@section('title', 'Criar Conta')
@section('content')
  <div class="w-full max-w-md bg-[#111827] rounded-2xl shadow-2xl p-8 space-y-6 border border-gray-800 relative overflow-hidden">
    <!-- Glow decorativo -->
    <div class="absolute inset-0 bg-gradient-to-tr from-[#00f5ff]/10 via-transparent to-[#00ff95]/10 blur-3xl"></div>

    <!-- Cabeçalho -->
    <div class="text-center relative z-10">
      <h2 class="text-3xl font-bold bg-gradient-to-r from-[#00f5ff] to-[#00ff95] bg-clip-text text-transparent">
        Criar Conta
      </h2>
      <p class="text-gray-400 text-sm mt-2">Bem-vindo, preencha os dados abaixo</p>
    </div>

    <!-- Formulário -->
    <form class="space-y-5 relative z-10" action="{{ route('user.store') }}" method="POST">
        @csrf
      <!-- Nome -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-300">Nome</label>
        <input type="text" id="name" name="name" placeholder="Seu nome completo"
          class="mt-1 w-full rounded-lg bg-[#0f172a] neon-border px-4 py-2 text-white focus:outline-none"  />
          @error('name')
            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
          @enderror
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com"
          class="mt-1 w-full rounded-lg bg-[#0f172a] neon-border px-4 py-2 text-white focus:outline-none"  />
            @error('email')
            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
          @enderror
      </div>

      <!-- Senha -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-300">Senha</label>
        <input type="password" id="password" name="password" placeholder="••••••••"
          class="mt-1 w-full rounded-lg bg-[#0f172a] neon-border px-4 py-2 text-white focus:outline-none"  />
            @error('password')
            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
          @enderror
      </div>

      <!-- Confirmar Senha -->
      <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-300">Confirmar Senha</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••"
          class="mt-1 w-full rounded-lg bg-[#0f172a] neon-border px-4 py-2 text-white focus:outline-none"  />
            @error('password_confirmation')
            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
          @enderror
      </div>

      <!-- Botão -->
      <button type="submit"
        class="w-full py-3 rounded-lg bg-gradient-to-r from-[#00f5ff] to-[#00ff95] text-gray-900 font-bold shadow-lg hover:shadow-[#00f5ff]/50 hover:scale-[1.02] transform transition">
        Criar Conta
      </button>
    </form>

    <!-- Link para login -->
    <p class="text-center text-sm text-gray-400 relative z-10">
      Já tem uma conta?
      <a href="#" class="text-[#00f5ff] hover:underline">Entrar</a>
    </p>
  </div>

@endsection
