<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Userprofileupdatecontroller extends Controller
{
    public function index()
    {
        return view('frontend.user_profile_update');
    }
}
