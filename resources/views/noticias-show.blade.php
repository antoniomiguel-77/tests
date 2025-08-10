@extends('layouts.app')

@section('content')
<div class="bg-gray-900 text-white min-h-screen py-12 px-4">
    <div class="max-w-4xl mx-auto bg-gray-800 p-8 rounded-2xl shadow-lg">
        <h1 class="text-4xl font-bold text-cyan-400 mb-4">{{ $noticia->titulo }}</h1>
        <img src="{{ $noticia->imagem }}" alt="Imagem" class="w-full h-80 object-cover rounded-lg mb-6">
        <p class="text-gray-300 mb-6">{{ $noticia->conteudo }}</p>

        <div class="flex items-center gap-3 mb-8">
            <button class="flex items-center gap-1 hover:text-cyan-400 transition">
                👍 <span>{{ $noticia->likes }}</span>
            </button>
            <button class="flex items-center gap-1 hover:text-red-400 transition">
                👎 <span>{{ $noticia->dislikes }}</span>
            </button>
        </div>

        {{-- Comentários --}}
        <h2 class="text-2xl font-bold mb-4">Comentários</h2>
        @auth
        <form action="{{ route('comentarios.store', $noticia->id) }}" method="POST" class="mb-6">
            @csrf
            <textarea name="conteudo" class="w-full bg-gray-700 p-4 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-cyan-400" rows="3" placeholder="Escreva um comentário..."></textarea>
            <button type="submit" class="mt-3 bg-cyan-500 hover:bg-cyan-600 text-white px-5 py-2 rounded-lg font-semibold transition">Comentar</button>
        </form>
        @endauth

        @foreach($noticia->comentarios as $comentario)
        <div class="bg-gray-700 p-4 rounded-lg mb-3">
            <p class="text-gray-200">{{ $comentario->conteudo }}</p>
            <div class="flex items-center justify-between text-gray-400 text-sm mt-2">
                <span>{{ $comentario->user->name }}</span>
                <div class="flex items-center gap-3">
                    <button class="flex items-center gap-1 hover:text-cyan-400 transition">
                        👍 <span>{{ $comentario->likes }}</span>
                    </button>
                    <button class="flex items-center gap-1 hover:text-red-400 transition">
                        👎 <span>{{ $comentario->dislikes }}</span>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
