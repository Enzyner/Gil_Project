<?php

namespace App\Http\Controllers;

use App\FaciltyCenter;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::latest()->get();
        $facilitys = FaciltyCenter::latest()->get();
        return view('admin' , ['users' => $users, 'facilitys' => $facilitys]);
        
    }

}
