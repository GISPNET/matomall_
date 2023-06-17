<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.seller');
    }
    public function removePhoto($photoId)
    {
        $photo=\App\Models\ProductImage::find($photoId);
        if(isset($photo)){
            $arquivo=$photo->image;
            $photo->delete();
            Storage::disk('public')->delete($arquivo);
            return back()->with('deleted','Imagem removida com sucesso');
        }
    }
}
