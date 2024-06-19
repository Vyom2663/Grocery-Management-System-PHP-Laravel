<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class Adminusrescontroller extends Controller
{
    public function index()
    {
        $user=User::all();
        return view('frontend.admin_users',compact('user'));
    }

    public function userdel($id)
    {
        $item=User::find($id);
        $item->delete();
        return redirect()->back();
    }
}
