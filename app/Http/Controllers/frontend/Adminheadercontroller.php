<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Adminheadercontroller extends Controller
{
    public function index()
    {
        return view('frontend.admin_header');
    }
}
