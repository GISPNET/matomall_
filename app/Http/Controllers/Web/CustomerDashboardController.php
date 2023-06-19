<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $user=Auth::user();
        $orders=$user->orders()->paginate(6);
        return view('web.dashboard', compact(['user','orders']));
    }
}
