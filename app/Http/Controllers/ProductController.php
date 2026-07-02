<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index(): View
    {
        // Sample products data - in a real application, this would come from the database
        $products = [
            [
                'id' => 1,
                'name' => 'iPhone 15 Pro Max APPLE (Recondicionado) Como Novo - 256 GB - Azul',
                'price' => 685.00,
                'original_price' => 899.00,
                'image' => 'https://images.unsplash.com/photo-1592286927505-1def25115558?w=200&h=250&fit=crop',
                'rating' => 4.0,
                'reviews_count' => 1,
                'seller' => 'MOBILE VIEW',
                'badge' => 'Recondicionado Marketplace',
                'delivery_days' => 6,
                'free_shipping' => false,
                'options_count' => 0,
            ],
        ];

        return view('products', ['products' => $products]);
    }
}
