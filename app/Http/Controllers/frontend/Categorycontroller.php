<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Categorycontroller extends Controller
{
    public function index()
    {
        $allProducts=Product::all();
        $fruits=Product::where('category','fruits')->get();
        $vegetables=Product::where('category','vegetables')->get();
        $snacks=Product::where('category','snacks')->get();
        $nonveg=Product::where('category','nonveg')->get();

        return view('frontend.category',compact('fruits'));
    }

    public function snack()
    {
        $snacks=Product::where('category','snacks')->get();

        return view('frontend.snacks',compact('snacks'));
    }

    public function vege()
    {
        $vegetables=Product::where('category','vegetables')->get();

        return view('frontend.vegetable',compact('vegetables'));
    }

    public function nonve()
    {
        $nonveg=Product::where('category','nonveg')->get();

        return view('frontend.nonveg',compact('nonveg'));
    }
}
