@extends('layouts.app')

@section('title', 'Recuperar Senha')

@section('content')
<div class="relative bg-gradient-to-b min-h-[70vh] flex items-center justify-center from-secondary to-gray-900 text-white py-16 md:py-24">
  <div class="w-full max-w-md bg-gray-800 border border-gray-700  rounded-xl shadow-lg p-8">

        <!-- Título -->
        <h1 class="text-3xl font-bold text-center text-white mb-6 tracking-wide">
            🔒 Recuperar Senha
        </h1>

        <!-- Mensagem de sucesso -->
        @if (session('status'))
            <div class="bg-green-500/20 border border-green-400 text-green-300 p-3 rounded mb-4 text-sm">
                {{ session('status') }}
            </div>
        @endif

        <!-- Formulário -->
        <form method="POST" action="" class="space-y-6">
            @csrf

            <!-- Campo de email -->
            <div>
                <label for="email" class="block text-sm font-medium text-white/80">E-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="mt-1 block w-full px-4 py-3 rounded-lg bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#187dff] focus:border-transparent">
                @error('email')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Botão de enviar -->

               <button type="submit"
                class="w-full py-2 bg-gradient-to-r from-blue-600 via-blue-500 to-blue-400 hover:from-blue-500 hover:to-blue-300 text-white font-bold rounded-lg transition transform hover:scale-105 shadow-lg">
                Enviar Link de Recuperação
            </button>
        </form>

        <!-- Link para voltar ao login -->
        <div class="mt-6 text-center">
            <a href="{{ route('login') }}" class="text-sm text-[#187dff] hover:underline">
                ⬅ Voltar ao Login
            </a>
        </div>
    </div>
</div>
@endsection
