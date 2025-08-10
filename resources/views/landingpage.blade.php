@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-secondary to-gray-900 text-white py-16 md:py-24">
    <div class="container mx-auto px-6 lg:px-12 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight">
            Bem-vindo ao <span class="text-primary drop-shadow-[0_0_15px_rgba(24,125,255,0.7)]">Futuro</span> da Informação
        </h1>
        <p class="mt-6 text-lg md:text-xl text-gray-300 max-w-2xl mx-auto">
            Notícias rápidas, comentários inteligentes e tecnologia de ponta, tudo em um só lugar.
        </p>
        <a href="{{ route('posts.index') }}"
           class="mt-8 inline-block px-8 py-4 bg-primary rounded-full text-lg font-semibold hover:bg-blue-600 shadow-lg hover:shadow-blue-500/40 transition-all duration-300">
           🚀 Explorar Notícias
        </a>
    </div>

    <!-- Efeito de fundo animado -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-20 -left-20 w-72 h-72 bg-primary/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl animate-pulse delay-2000"></div>
    </div>
</section>

<!-- Últimas Notícias -->
<section class="py-14 bg-gray-900">
    <div class="container mx-auto px-6 lg:px-12">
        <h2 class="text-3xl font-bold text-center mb-10">
            Últimas <span class="text-primary">Notícias</span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts ?? [] as $post)
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg border border-gray-700 hover:border-primary/50 transform hover:scale-[1.02] transition-all duration-300 flex flex-col">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="h-48 w-full object-cover">
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold mb-2 line-clamp-2 hover:text-primary transition-colors">
                                {{ $post->title }}
                            </h3>
                            <p class="text-gray-400 text-sm line-clamp-3">
                                {{ Str::limit(strip_tags($post->content), 100) }}
                            </p>
                        </div>
                        <a href="{{ route('posts.show', $post) }}"
                           class="mt-4 inline-block text-primary font-semibold hover:underline">
                           Ler mais →
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center py-16 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 11H5m14 0a2 2 0 100-4H5a2 2 0 100 4zm0 0v8a2 2 0 01-2 2H7a2 2 0 01-2-2v-8" />
                    </svg>
                    <p class="text-lg">Nenhum post encontrado.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
