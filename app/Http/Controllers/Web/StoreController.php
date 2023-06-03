<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        //$tores = Store::orderBy('id','DESC')->paginate(9);
        $stores = Store::all();
        return view('web.stores', compact(['stores']));
    }
    public function show($slug)
    {
        $store = Store::where('slug', '=', $slug)->first();
        dd($store);
    }
}
