<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\StoreUpdateRequest;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user=Auth::user();
        $store=$user->store;
        return view('admin.stores.index', compact(['store']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreRequest $request)
    {
        $user=Auth::user();
        $store=$user->store;
        if($store){
           return back()->with('warning','É permitido apenas um cadastro de loja por usuário.');
        }
        else{

            $data = $request->all();
            $data=$request->except('_token');
            $user=Auth::user();
            $user->store()->create($data);
            return back()->with('message', 'A loja foi salva com sucesso');
        }
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
        return view('admin.stores.edit', compact(['store']));
    }
    public function update(StoreUpdateRequest $request, $id)
    {
        $data = $request->all();
        $data=$request->except('_token');
        $user=Auth::user();
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
            $store->delete();
            return back()->with('message', 'A loja foi removida com sucesso');
        }
    }
}
