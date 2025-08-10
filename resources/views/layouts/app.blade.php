<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-Dev77</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @layer utilities {
            .neon-text {
                text-shadow: 0 0 5px rgba(24,125,255,0.6),
                             0 0 10px rgba(24,125,255,0.6),
                             0 0 20px rgba(24,125,255,0.6);
            }
        }
    </style>
</head>
<body class="bg-gray-900 text-white font-sans">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 border-b border-gray-700 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6 py-4">

            <!-- Logo -->
            <a href="{{ route('landing') }}" class="text-2xl font-bold text-primary neon-text">
                🚀 Dev77
            </a>

            <!-- Links Desktop -->
            <div class="hidden md:flex items-center space-x-6 text-gray-300 font-medium">
                <a href="{{ route('posts.index') }}" class="hover:text-primary transition-colors">Notícias</a>

                @guest
                    <a href="{{ route('login') }}"
                       class="px-4 py-2 rounded-lg border border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300">
                       Login
                    </a>
                    <a href="{{ route('register') }}"
                       class="px-4 py-2 rounded-lg bg-primary text-white hover:bg-blue-600 transition-all duration-300">
                       Registrar
                    </a>
                @else
                    <span class="text-gray-400">👤 {{ auth()->user()->name ?? '' }}</span>
                    <form action="" method="POST" class="inline">
                        @csrf
                        <button class="ml-2 px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg transition">Sair</button>
                    </form>
                @endguest
            </div>

            <!-- Botão Mobile -->
            <div class="md:hidden">
                <button id="menu-btn" class="focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div id="mobile-menu" class="hidden flex-col bg-gray-800 px-6 py-4 space-y-4 md:hidden">
            <a href="" class="hover:text-primary transition-colors">Notícias</a>
            @guest
                <a href="" class="text-primary">Login</a>
                <a href="" class="text-primary">Registrar</a>
            @else
                <span class="text-gray-400">👤 {{ auth()->user()->name ?? '' }}</span>
                <form action="" method="POST">
                    @csrf
                    <button class="text-red-500">Sair</button>
                </form>
            @endguest
        </div>
    </nav>

    <!-- Conteúdo -->
    <main class="pt-24 px-6">
        @yield('content')
    </main>

    <!-- Script para Menu Mobile -->
    <script>
        document.getElementById('menu-btn').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
