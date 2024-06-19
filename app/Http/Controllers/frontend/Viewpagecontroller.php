<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class Viewpagecontroller extends Controller
{
    public function index($id)
    {
        $product=Product::find($id);
        return view('frontend.view_page',compact('product'));
    }
}
