<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
    public function contect()
    {
        return view('frontend.contact');
    }
}
