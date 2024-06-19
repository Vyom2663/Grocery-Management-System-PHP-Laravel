<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Adminupdateproductcontroller extends Controller
{
    public function index()
    {
        return view('frontend.admin_update_product');
    }
}
