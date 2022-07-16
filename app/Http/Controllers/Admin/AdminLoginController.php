<?php

namespace App\Http\Controllers\Admin;

use App\Models\E_Tower\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login() {

        if(Auth::guard('admin')->check()){
            return redirect()->route('dashboard');
        } else {
            $setting = Setting::find(1);
            return view('admin.login', compact('setting'));
        }
    }

    public function login_post(Request $request) {

        $remember = $request->has('remember') ? true : false;

        if ( Auth::guard('admin')->attempt([ 'email' => request('email') , 'password' => request('password')] , $remember) ) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error','Please Check Your Email and Password again');
        }
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
