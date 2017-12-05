<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;	


class SisadminController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest:sisadmin');
    }

    public function index(){
    	return view('auth.adminDashboard');
    }

    public function showLoginForm(){
    	return view('auth.adminLogin');
    }

    public function login(Request $request){
    	$this->validate($request, [
         'email' => 'required|email',
         'password' => 'required|min:6'
    		]);

    	if (Auth::guard('sisadmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		return redirect()->intended(route('sisadmin.dashboard'));
    	}
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function adminlogout(){
        Auth::guard('sisadmin')->logout();
       /* $request->session()->flush();
        $request->session()->regenerate();*/
        return redirect('/');
    }
}
