<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = \App\Models\Store::all('id', 'name');
        return view('admin.products.create', compact(['stores']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'store_id' => 'required',
            'description' => 'nullable',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'price.required' => 'O campo preço é obrigatório.',
            'store_id.required' => 'O campo loja é obrigatório.',
        ]);
        $data = $request->all();
        \App\Models\Product::create($data);
        return back()->with('message', 'O produto foi salvo com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stores = \App\Models\Store::all('id', 'name');
        $product = \App\Models\Product::find($id);
        return view('admin.products.edit', compact(['stores', 'product']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'store_id' => 'required',
            'description' => 'nullable',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'price.required' => 'O campo preço é obrigatório.',
            'store_id.required' => 'O campo loja é obrigatório.',
        ]);
        $data = $request->all();
        \App\Models\Product::find($id)->update($data);

        return back()->with('message', 'O produto foi atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Models\Product::find($id);
        if (isset($product)); {
            $product->delete();
            return back()->with('message', 'O produto foi removido com sucesso');
        }
    }
}
