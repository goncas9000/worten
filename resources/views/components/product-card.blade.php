@props(['product'])

<div class="bg-white rounded-lg shadow hover:shadow-md transition-shadow overflow-hidden">
    <div class="flex gap-3 p-3">
        <!-- Product Image -->
        <div class="flex-shrink-0 w-24 h-24 bg-gray-100 rounded overflow-hidden flex items-center justify-center">
            <img 
                src="{{ $product['image'] }}" 
                alt="{{ $product['name'] }}"
                class="h-full object-contain"
            >
        </div>

        <!-- Product Info -->
        <div class="flex-1 min-w-0">
        <!-- Product Name -->
        <h3 class="text-xs font-semibold text-gray-800 mb-1 line-clamp-2 h-7">
            {{ $product['name'] }}
        </h3>

        <!-- Seller Badge -->
        <div class="text-xs text-gray-600 mb-1">
            Vendido por <span class="font-semibold text-xs">{{ $product['seller'] }}</span>
        </div>

        <!-- Rating -->
        <div class="flex items-center gap-1 mb-1">
            <div class="flex gap-0.5">
                @for ($i = 0; $i < 5; $i++)
                    @if ($i < floor($product['rating']))
                        <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                    @else
                        <svg class="w-3 h-3 text-gray-300 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                    @endif
                @endfor
            </div>
            <span class="text-xs text-gray-600">({{ $product['reviews_count'] }})</span>
        </div>

        <!-- Price -->
        <div class="mb-1">
            <div class="text-lg font-bold text-red-600">
                €{{ number_format($product['price'], 2, ',', '.') }}
            </div>
            @if ($product['original_price'] > $product['price'])
                <div class="text-xs text-gray-500 line-through">
                    €{{ number_format($product['original_price'], 2, ',', '.') }}
                </div>
            @endif
        </div>

        <!-- Delivery Info -->
        <div class="text-xs text-gray-600 space-y-0.5">
            <div>Entrega em 2 a 3 dias <span class="text-green-600 font-semibold">Grátis</span></div>
            @if ($product['free_shipping'])
                <div class="text-green-600 font-semibold">Levanta na loja <span class="text-gray-600">Grátis</span></div>
            @endif
        </div>

        <!-- Options Count -->
        @if ($product['options_count'] > 0)
            <div class="text-xs text-gray-700 bg-gray-50 p-1.5 rounded mt-1">
                +{{ $product['options_count'] }} opções disponíveis
            </div>
        @endif

        <!-- Action Buttons -->
        <div class="flex gap-1 mt-2">
        </div>
        </div>
    </div>
</div>
