<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __contruct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
 
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //validasi form
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        //mencoba sign in admin
        if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password]))
        {
            //login succcess
            return redirect()->intended(route('admin.dashboard'));
        }
        //login gagal
        return redirect()->back()->withInput($request->only('username'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect(route('admin.login'));
    }
}
