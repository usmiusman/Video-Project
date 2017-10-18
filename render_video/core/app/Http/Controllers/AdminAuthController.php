<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AdminAuthController extends Controller
{


    public function getLogin()
    {
        return view('auth.login');
    }


    public function postLogin(Request $request)
    {

        if (Auth::guard('admin')->attempt([
            'username' => $request->email,
            'password' => $request->password,
        ])
        ) {

            // Authentication passed...
            return redirect('/dashboard');
        }

       $request->session()->flash('message', 'Login incorrect!');
       return redirect()->back();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        session()->flash('message', 'Just Logged Out!');
        return redirect('/auth');
    }



}
