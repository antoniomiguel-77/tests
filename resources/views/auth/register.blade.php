{{-- resources/views/auth/register.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="relative bg-gradient-to-b min-h-[70vh] flex items-center justify-center from-secondary to-gray-900 text-white py-16 md:py-24">
    <div class="bg-gray-900 bg-opacity-80 p-8 rounded-2xl shadow-2xl w-full max-w-md backdrop-blur-xl border border-gray-800">

        <h2 class="text-3xl font-bold text-center text-white mb-2 tracking-wider">Criar Conta</h2>
        <p class="text-gray-400 text-center mb-6 text-sm">Junte-se à nossa comunidade e explore conteúdos incríveis.</p>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <!-- Nome -->
            <div>
                <label for="name" class="block text-gray-300 text-sm mb-1">Nome</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus
                    class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-300 text-sm mb-1">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                @error('email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <!-- Senha -->
            <div>
                <label for="password" class="block text-gray-300 text-sm mb-1">Senha</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                @error('password')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirmar Senha -->
            <div>
                <label for="password_confirmation" class="block text-gray-300 text-sm mb-1">Confirmar Senha</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            </div>

            <!-- Botão Registrar -->
            <button type="submit"
                class="w-full py-2 bg-gradient-to-r from-blue-600 via-blue-500 to-blue-400 hover:from-blue-500 hover:to-blue-300 text-white font-bold rounded-lg transition transform hover:scale-105 shadow-lg">
                Criar Conta
            </button>
        </form>

        <!-- Link para Login -->
        <p class="text-gray-400 text-center text-sm mt-6">
            Já tem conta?
            <a href="{{ route('login') }}" class="text-blue-400 hover:underline">Entrar</a>
        </p>
    </div>
</div>
@endsection
