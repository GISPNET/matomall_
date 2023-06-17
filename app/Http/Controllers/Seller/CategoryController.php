<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.seller');
    }
    public function index()
    {
        if(auth()->user()->store){
            $categories=auth()->user()->store->categories()->paginate(10);
        }
        else{
            $categories=[];
        }
        return view('admin.categories.index',compact(['categories']));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        $data = $request->all();
        $data = $request->except('_token');
        $store=auth()->user()->store;
        $category=$store->categories()->create($data);
        return back()->with('message', 'A categoria foi salva com sucesso');
    }

    public function edit($id)
    {
        $category = \App\Models\Category::find($id);
        return view('admin.categories.edit', compact(['category']));
    }

    public function update(CategoryUpdateRequest $request, $id)
    {
        $data = $request->all();
        $data = $request->except('_token');
        \App\Models\Category::find($id)->update($data);
        return back()->with('message', 'A categoria foi atualizada com sucesso');
    }

    public function destroy($id)
    {
        $category = \App\Models\Category::find($id);
        if (isset($category)); {
            $category->delete();
            return back()->with('message', 'A categoria foi removida com sucesso');
        }
    }
}
