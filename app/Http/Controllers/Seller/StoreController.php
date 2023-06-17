<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\StoreUpdateRequest;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth.seller');
    }
    public function index()
    {
        $store =Auth::user()->store;
        return view('tests.stores.index', compact(['store']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tests.stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreRequest $request)
    {
        $path = $request->file('logo')->store('logo', 'public');
        $data = $request->all();
        $data = $request->except('_token');
        if ($request->hasFile('logo')) {
            $data['logo'] = $path;
        }
        $user = Auth::user();
        $user->store()->create($data);
        return back()->with('message', 'A loja foi salva com sucesso');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = \App\Models\Store::find($id);
        return view('tests.stores.edit', compact(['store']));
    }
    public function update(StoreUpdateRequest $request, $id)
    {
        $data = $request->all();
        $data = $request->except('_token');
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logo', 'public');
            $store = \App\Models\Store::find($id);
            if ($store->logo) {
                Storage::disk('public')->delete($store->logo);
            }
            $data['logo'] = $path;
        }
        $user = Auth::user();
        $user->store()->update($data);
        return back()->with('message', 'A loja foi atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = \App\Models\Store::find($id);
        if (isset($store)); {
            $logo = $store->logo;
            $store->delete();
            Storage::disk('public')->delete($logo);
            return back()->with('message', 'A loja foi removida com sucesso');
        }
    }
}
