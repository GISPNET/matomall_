<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user=Auth::user();
        if($user->store){
            $products=$user->store->products()->paginate(10);
        }else{
            $products=[];
        }
        return view('admin.products.index', compact(['products']));
    }
    public function create()
    {
        $user = Auth::user();
        $store = $user->store;

        if (!$store) {
            return back()->with('warning', 'Você não possui uma loja.');
        }
        return view('admin.products.create', compact('store'));
    }

    public function store(ProductStoreRequest $request)
    {
        $data = $request->all();
        $store=auth()->user()->store;
        $store->products()->create($data);
        return back()->with('message', 'O produto foi salvo com sucesso');
    }

    public function edit($id)
    {
        $stores = \App\Models\Store::all('id', 'name');
        $product = \App\Models\Product::find($id);
        return view('admin.products.edit', compact(['stores', 'product']));
    }

    public function update(ProductUpdateRequest $request, $id)
    {
        $data = $request->all();
        \App\Models\Product::find($id)->update($data);

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
