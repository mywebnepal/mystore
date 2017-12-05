<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:sisadmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Admin Dashboard';
        $page_description = 'mywebnepal admin panel';
        return view('auth.adminDashboard', compact('page_title', 'page_description'));
    }

    
}
