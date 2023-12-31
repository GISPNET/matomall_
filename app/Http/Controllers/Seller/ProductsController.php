<?php

namespace App\Http\Controllers\Seller;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.seller');
    }
    public function index()
    {
        $user = Auth::user();
        /*$quando=1;

        $products = Cache::remember('all-products-seller',$quando,function() use($user){
            if ($user->store) {
                return $products = $user->store->products()->paginate(10);
            } else {
               return  $products = [];
            }
        });*/

        if ($user->store) {
            $products = $user->store->products()->orderBy('id','desc')->paginate(10);
        } else {
            $products = [];
        }

        return view('sellers.products.all-products', compact(['products']));
    }
    public function create()
    {
        $product = new Product;
        $categories = \App\Models\Category::all();
        $tags = \App\Models\Tag::all();
        $brands = \App\Models\Brand::all();
        return view('sellers.products.add-product', compact('product', 'categories','tags','brands'));
    }

    public function store(Request $request)
    {
        $images = $request->file('files');

        $data = $request->only('name','regular_price','sale_price','shipping_type','product_id_type','product_id','files','description','body','category_id','brand_id','tag_id');
        $store = auth()->user()->store;
        $product = $store->products()->create($data);

        $selectedCategories = $request->input('categories', []);

       // $product->categories()->sync($selectedCategories);

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
