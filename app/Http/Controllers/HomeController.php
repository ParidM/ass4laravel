<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function Homepage(){
        return view('layouts/home');
    }
}
