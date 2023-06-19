<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = session()->has('cart') ? session()->get('cart') : [];
        return view('web.cart', compact('carts'));
    }

    public function add(Request $request)
    {
        $productData = $request->get('product');

        $product = \App\Models\Product::where('slug', $productData['slug'])->first();

        if (!$product || $productData['amount'] == 0) {
            return redirect()->route('product.details', $productData['slug']);
        }

        $productData['name'] = $product->name;
        $productData['store_id'] = $product->store_id;

        if ($product->sale_price) {
            $productData['price'] = $product->sale_price;
        } else {
            $productData['price'] = $product->regular_price;
        }

        if (session()->has('cart')) {
            $products = session()->get('cart');
            $productsSlugs = array_column($products, 'slug');

            if (in_array($productData['slug'], $productsSlugs)) {
                $products = $this->productIncrement($productData['slug'], $productData['amount'], $products);
                session()->put('cart', $products);
            } else {
                $products[] = $productData;
                session()->put('cart', $products);
            }
        } else {
            $products[] = $productData;
            session()->put('cart', $products);
        }

        return back()->with('product-added', 'Produto adicionado com sucesso');
    }

    public function remove($slug)
    {
        if (!session()->has('cart')) {
            return redirect()->route('cart.index');
        }

        $products = session()->get('cart');

        $products = array_filter($products, function ($line) use ($slug) {
            return $line['slug'] != $slug;
        });

        session()->put('cart', $products);

        return redirect()->route('cart.index');
    }

    private function productIncrement($slug, $amount, $products)
    {
        $products = array_map(function ($line) use ($slug, $amount) {
            if ($slug == $line['slug']) {
                $line['amount'] += $amount;
            }
            return $line;
        }, $products);

        return $products;
    }
}
