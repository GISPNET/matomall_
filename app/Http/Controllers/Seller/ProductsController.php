<?php

namespace App\Http\Controllers\Seller;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.seller');
    }
    public function index()
    {
        $user = Auth::user();
        if ($user->store) {
            $products = $user->store->products()->paginate(10);
        } else {
            $products = [];
        }
        return view('admin.products.index', compact(['products']));
    }
    public function create()
    {
        $product = new Product;
        $categories = \App\Models\Category::all();
        return view('sellers.products.add', compact('product', 'categories'));
    }

    public function store(Request $request)
    {

        $data = $request->only('name','regular_price','sale_price','shipping_type','product_id_type','product_id','files','description','body');
        $store = auth()->user()->store;
        $product = $store->products()->create($data);

        $selectedCategories = $request->input('categories', []);

        $product->categories()->sync($selectedCategories);

        if ($images) {
            $imageUploaded = [];
            foreach ($images as $image) {
                $path = $image->store('products', 'public');
                $imageUploaded[] = ['image' => $path];
            }
            $product->photos()->createMany($imageUploaded);
        }

        return back()->with('message', 'O produto foi salvo com sucesso');
    }


    public function edit($id)
    {
        $categories = \App\Models\Category::all();

        $product = \App\Models\Product::find($id);
        return view('admin.products.edit', compact(['categories', 'product']));
    }

    public function update(ProductUpdateRequest $request, $id)
    {
        $images = $request->file('photos');

        $data = $request->all();
        $product = \App\Models\Product::find($id);

        $product->update($data);

        $selectedCategories = $request->input('categories', []);

        $product->categories()->sync($selectedCategories);

        if ($images) {
            $imageUploaded = [];
            foreach ($images as $image) {
                $path = $image->store('products', 'public');
                $imageUploaded[] = ['image' => $path];
            }
            $product->photos()->createMany($imageUploaded);
        }
        return back()->with('message', 'O produto foi atualizado com sucesso');
    }

    public function destroy($id)
    {
        $product = \App\Models\Product::find($id);
        if (isset($product)); {
            $product->delete();
            return back()->with('message', 'O produto foi removido com sucesso');
        }
    }
}
