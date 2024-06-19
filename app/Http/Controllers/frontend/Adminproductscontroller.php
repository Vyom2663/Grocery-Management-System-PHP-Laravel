<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class Adminproductscontroller extends Controller
{
    public function index()
    {
        $allproduct = Product::all();

        return view('frontend.admin_products',compact('allproduct'));
    }
}
