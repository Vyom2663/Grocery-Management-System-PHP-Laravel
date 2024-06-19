<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Headercontroller extends Controller
{
    public function index()
    {
        $info=User::all();
        return view('frontend.header','info');
    }
}
