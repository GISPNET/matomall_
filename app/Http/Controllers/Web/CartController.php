<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = $request->get('product');

        if (session()->has('cart')) {
            session()->push('cart', $product);
        } else {
            $products[] = $product;
            session()->put('cart', $products);
        }
        return back()->with('product-added','Produto adicionado com sucesso');
    }
    public function index(){
        $carts=session()->has('cart')? session()->get('cart'): [];
        return view('web.cart',compact(['carts']));
    }
}
