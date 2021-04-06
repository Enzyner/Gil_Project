<?php

namespace App\Http\Controllers\Auth;

use App\FaciltyCenter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FaciltyCenterRegController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('guest:facilty');
    }

    public function showRegisterForm()
    {
      return view('auth.facilty-register');
    }

    
  
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
            'account_balance' => 'account_balance'
        ]);
      /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\FaciltyCenter
     */

        FaciltyCenter::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'account_balance' => $request->account_balance
                ]);

                return redirect('facility');
    }

}
