<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Logoutcontroller extends Controller
{
    public function index()
    {
        return view('frontend.logout');
    }


}
