<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online - Produtos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 m-0">
    <!-- Header -->
    <header class="bg-red-600 text-white">
        <div class="max-w-7xl mx-auto px-4 py-2">
            <div class="flex items-center justify-between gap-4">
                <h1 class="text-xl font-bold">Worten</h1>
                <div class="flex items-center gap-2 flex-1">
                    <input 
                        type="search" 
                        placeholder="O que estás à procura?" 
                        class="px-3 py-1.5 rounded-full text-gray-800 w-full text-sm"
                    >
                    <button class="px-2 py-1.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8-3a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </button>
                    <button class="px-2 py-1.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-4">
        <!-- Page Title -->
        <div class="mb-4">
            <h2 class="text-xl font-bold text-gray-800 mb-1">Artigos à Venda</h2>
            <p class="text-sm text-gray-600">Descobre a nossa seleção de produtos de qualidade</p>
        </div>

        <!-- Filters Section (Optional) -->
        <div class="bg-white rounded-lg shadow p-3 mb-4">
            <div class="flex items-center gap-3 flex-wrap text-sm">
                <div>
                    <label class="text-xs text-gray-700 font-semibold">Filtros:</label>
                </div>
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded">
                    <span class="text-xs text-gray-700">Promoções</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded">
                    <span class="text-xs text-gray-700">Melhores Avaliados</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded">
                    <span class="text-xs text-gray-700">Recondicionado</span>
                </label>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>

        <!-- Empty State -->
        @if (empty($products))
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                <p class="text-gray-500 text-lg">Nenhum produto disponível no momento</p>
            </div>
        @endif
    </main>

    <!-- Footer -->
    <footer class="bg-gray-50 mt-8">
    </footer>
</body>
</html>
