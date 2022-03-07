<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vendor;
use Illuminate\Support\Facades\Hash;

class VendorRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:vendor')->except('logout');
    }

    public function showRegisterForm()
    {
        return view('auth.vendor-register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'nama_ven' => ['required', 'string', 'max:255'],
            'nama_perusahaan' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:vendors'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request['password'] = Hash::make($request->password);
        Vendor::create($request->all());

        return redirect()->intended(route('vendor.dashboard'));
    }
}
