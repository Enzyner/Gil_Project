<?php

namespace App\Http\Controllers\Auth;

use App\FaciltyCenter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class FaciltyRegController extends Controller
{
    //
    public function register()
    {

      return view('auth.facilty-register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
           
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        FaciltyCenter::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => FacadesHash::make($request->password),
            'account_balance' => $request->account_balance
        ]);

        return redirect()->intended(route('facilty.dashboard'));
    }
}
