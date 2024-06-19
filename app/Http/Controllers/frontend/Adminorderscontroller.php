<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class Adminorderscontroller extends Controller
{
    public function index()
    {
        $order=Order::all();
        return view('frontend.admin_orders',compact('order'));
    }

    public function orderdel($id)
    {
        $item=Order::find($id);
        $item->delete();
        return redirect()->back();
    }
}
