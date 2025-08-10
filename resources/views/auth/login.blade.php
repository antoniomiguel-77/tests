@extends('layouts.app')

@section('content')
<div class="min-h-[70vh] flex items-center justify-center bg-gray-900">
    <div class="w-full max-w-md bg-gray-800 border border-gray-700 rounded-xl shadow-lg p-8">
        <h2 class="text-3xl font-bold text-center mb-6 text-primary drop-shadow-[0_0_10px_rgba(24,125,255,0.7)]">
            🔑 Login
        </h2>

        @if ($errors->any())
            <div class="mb-4 bg-red-500/20 border border-red-500 text-red-300 rounded-lg p-3 text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300">E-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="mt-1 block w-full rounded-lg border border-gray-600 bg-gray-900 text-white px-4 py-3 focus:border-primary focus:ring focus:ring-primary/40 transition">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">Senha</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 block w-full rounded-lg border border-gray-600 bg-gray-900 text-white px-4 py-3 focus:border-primary focus:ring focus:ring-primary/40 transition">
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between text-sm text-gray-400">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="remember" class="text-primary focus:ring-primary">
                    <span>Lembrar-me</span>
                </label>
                <a href="{{ route('forgot.password') }}" class="hover:text-primary transition">Esqueceu a senha?</a>
            </div>

            <!-- Botão Login -->
              <button type="submit"
                class="w-full py-2 bg-gradient-to-r from-blue-600 via-blue-500 to-blue-400 hover:from-blue-500 hover:to-blue-300 text-white font-bold rounded-lg transition transform hover:scale-105 shadow-lg">
                Entrar
            </button>
        </form>

        <!-- Link para Registro -->
        <p class="mt-6 text-center text-sm text-gray-400">
            Ainda não tem conta?
            <a href="{{ route('register') }}" class="text-primary hover:underline">Criar conta</a>
        </p>
    </div>
</div>
@endsection
