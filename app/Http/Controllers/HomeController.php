<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
  
       
    }


public function adminDashboard()
{
    return view('dashboard');
}

}
