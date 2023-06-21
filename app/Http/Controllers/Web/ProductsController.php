<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class ProductsController extends Controller
{
    public function index()
    {
        $expiracao = 1;

        $products = Cache::remember('all_products', $expiracao, function () {
            return Product::orderBy('id', 'DESC')->paginate(9);
        });
        return view('web.products', compact(['products']));
    }

    public function show($slug)
    {
        $expiracao = 1;

        $product = Cache::remember('product', $expiracao, function () use ($slug) {
            return Product::where('slug', '=', $slug)->first();
        });

        $similar_products = Cache::remember('similar_products', $expiracao, function () {
            return Product::all();
        });

        return view('web.product-details', compact(['product', 'similar_products']));
    }
}
