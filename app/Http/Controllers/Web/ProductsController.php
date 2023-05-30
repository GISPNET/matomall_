<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(9);
        return view('web.products',compact(['products']));
    }

    public function show($slug)
    {
        $similar_products=Product::all();
        $product = Product::where('slug', '=', $slug)->first();
        return view('web.product-details',compact(['product','similar_products']));
    }
}
