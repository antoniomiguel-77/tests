@extends('layouts.app')

@section('content')
<div class="bg-gray-900 text-white min-h-screen py-12 px-4">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-8 text-center text-cyan-400">Explorar Notícias</h1>

        {{-- Grid de notícias --}}
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($noticias ?? [] as $noticia)
            <div class="bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:scale-[1.02] transition transform">
                <img src="{{ $noticia->imagem }}" alt="Imagem da notícia" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h2 class="text-2xl font-semibold text-white mb-3 hover:text-cyan-400 transition">
                        <a href="{{ route('noticias.show', $noticia->id) }}">{{ $noticia->titulo }}</a>
                    </h2>
                    <p class="text-gray-400 text-sm mb-4">
                        {{ Str::limit($noticia->conteudo, 100) }}
                    </p>
                    <div class="flex items-center justify-between text-gray-400 text-sm">
                        <span>{{ $noticia->created_at->format('d M Y') }}</span>
                        <div class="flex items-center gap-3">
                            <button class="flex items-center gap-1 hover:text-cyan-400 transition">
                                👍 <span>{{ $noticia->likes }}</span>
                            </button>
                            <button class="flex items-center gap-1 hover:text-red-400 transition">
                                👎 <span>{{ $noticia->dislikes }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>

        {{-- Paginação --}}
        <div class="mt-10">
            {{ isset($noticias) ? $noticias->links() : '' }}
        </div>
    </div>
</div>
@endsection
