<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::paginate(10);
        return view('admin.stores.index', compact(['stores']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = \App\Models\User::all('id', 'name');
        return view('admin.stores.create', compact(['users']));
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
            'name' => 'required|unique:stores,name',
            'description' => 'nullable',
            'phone' => 'nullable',
            'mobile_phone' => 'nullable',
            'slug' => 'nullable',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'name.unique' => 'Já existe uma loja com esse nome.',
        ]);
        $data = $request->all();
        $user = \App\Models\User::find($data['user_id']);
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
       $store=\App\Models\Store::find($id);
       return view('admin.stores.edit',compact(['store']));
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
            'description' => 'nullable',
            'phone' => 'nullable',
            'mobile_phone' => 'nullable',
            'slug' => 'nullable',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'name.unique' => 'Já existe uma loja com esse nome.',
        ]);
       $data=$request->all();
       $d=$store=\App\Models\Store::find($id)->update($data);

       return back()->with('message','A loja foi atualizada com sucesso');
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
