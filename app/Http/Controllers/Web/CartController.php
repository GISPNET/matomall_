<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = session()->has('cart') ? session()->get('cart') : [];
        return view('web.cart', compact(['carts']));
    }

    public function add(Request $request)
    {
        $product = $request->get('product');

        if (session()->has('cart')) {

            $products = session()->get('cart');
            $productsSlungs = array_column($products, 'slug');

            if (in_array($product['slug'], $productsSlungs)) {
                $products = $this->productIncrement($product['slug'], $product['amount'], $products);
                session()->put('cart', $products);
            }else{
                session()->push('cart', $product);
            }
        } else {
            $products[] = $product;
            session()->put('cart', $products);
        }
        return back()->with('product-added', 'Produto adicionado com sucesso');
    }
    public function remove($slug)
    {
        if (!session()->has('cart'))
            return redirect()->route('cart.index');

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
