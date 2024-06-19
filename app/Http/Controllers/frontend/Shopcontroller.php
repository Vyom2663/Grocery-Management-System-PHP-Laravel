<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Shopcontroller extends Controller
{
    public function index()
    {
        $allProducts=Product::all();
        $fruits=Product::where('category','fruits')->get();
        $vegetables=Product::where('category','vegetables')->get();
        $snacks=Product::where('category','snacks')->get();
        $nonveg=Product::where('category','nonveg')->get();

        return view('frontend.shop',compact('allProducts','fruits','vegetables','snacks','nonveg'));
    }
}
