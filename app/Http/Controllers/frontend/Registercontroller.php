<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Redirect;


class Registercontroller extends Controller
{
    public function index()
    {
        return view('frontend.register');
    }

    public function login()
    {
        return view('frontend.login' );
    }

    public function registeruser(Request $data)
    {
        $newUser = new User();
        $newUser->name=$data->input('name');
        $newUser->email=$data->input('email');
        $newUser->password=md5($data->input('pass'));
        $newUser->utype="USR";

        if($data->hasFile('image')){
            $file=$data->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move(public_path('myimage'),$filename);
            $newUser->image=$filename;
        }


        if($newUser->save())
        {
            #Alert::success('Congo' ,'Login successful');
            return redirect('login')->with('sucess','ypur account is ready');
        }
        return view('frontend.register');
    }

    public function loginuser(Request $data)
    {
        $user=User::where('email',$data->input('email'))->where('password',md5($data->input('password')))->first();
        if($user)
        {
            session()->put('id',$user->id);
            session()->put('utype',$user->utype);
            if($user->utype=='USR')
            {
                return redirect('home');
            }
            else
            {
                return redirect('admin_page');
            }
        }
        else
        {
            return redirect('login')->with('error','username or password incorrect...');
        }
        return view('frontend.login');
    }

    public function logout()
    {
        session()->forget('id');
        session()->forget('utype');

        return redirect('/login');
    }

    public function profile()
    {
        if(session()->has('id'))
        {
            $user=User::find(session()->get('id'));
            return view('frontend.user_profile_update',compact('user'));
        }
        return redirect('login');
    }

    public function updateprofile(Request $data)
    {
        $User =User::find(session()->get('id'));
        $User->name=$data->input('name');
        $User->password=md5($data->input('new_pass'));
        if($data->File('image') != null)
        {
            if($data->hasFile('image')){
                $file=$data->file('image');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move(public_path('myimage'),$filename);
                $User->image=$filename;
            }
        }

        if($User->save())
        {
            return redirect()->back();
        }
    }

    public function header()
    {
        $user=User::all();
        $user=User::get('name');
        return view('frontend.header',compact('user' ,$user));
    }
}
