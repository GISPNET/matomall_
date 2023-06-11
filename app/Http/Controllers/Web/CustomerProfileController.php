<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.customer');
    }
    public function index(){
        return view('web.profile');
    }
}
