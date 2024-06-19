<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class Adminpagecontroller extends Controller
{
    public function index()
    {
        $usercount = User::where('utype','USR')->count();
        $admincount = User::where('utype' , 'ADM')->count();
        $totalaccount = User::count();
        $totfeedback = Feedback::count();
        $totproduct = Product::count();
        $totorder = Order::count();

        return view('frontend.admin_page',compact('usercount','admincount','totalaccount','totfeedback','totproduct','totorder'));
    }

}
